<?php

class cls_mysql
{
    var $link_id    = NULL;

    var $settings   = array();

    var $queryCount = 0;
    var $queryTime  = '';
    var $queryLog   = array();

    var $max_cache_time = 300; // 最大的缓存时间，以秒为单位

    var $cache_data_dir = '';
    var $root_path      = '';

    var $error_message  = array();
    var $platform       = '';
    var $version        = '';
    var $dbhash         = '';
    var $starttime      = 0;
    var $timeline       = 0;
    var $timezone       = 0;

    var $mysql_config_cache_file_time = 0;

    var $mysql_disable_cache_tables = array(); // 不允许被缓存的表，遇到将不会进行缓存

    function __construct($dbhost, $dbuser, $dbpw, $dbname = '', $charset = 'utf8', $pconnect = 0, $quiet = 1)
    {
        $this->cls_mysql($dbhost, $dbuser, $dbpw, $dbname, $charset, $pconnect, $quiet);
    }

    function cls_mysql($dbhost, $dbuser, $dbpw, $dbname = '', $charset = 'utf8', $pconnect = 0, $quiet = 1)
    {
      


        if ($quiet)
        {
            $this->connect($dbhost, $dbuser, $dbpw, $dbname, $charset, $pconnect, $quiet);
        }
        else
        {
            $this->settings = array(
                                    'dbhost'   => $dbhost,
                                    'dbuser'   => $dbuser,
                                    'dbpw'     => $dbpw,
                                    'dbname'   => $dbname,
                                    'charset'  => $charset,
                                    'pconnect' => $pconnect
                                    );
        }
    }

    function connect($dbhost, $dbuser, $dbpw, $dbname = '', $charset = 'utf8', $pconnect = 0, $quiet = 0)
    {
        if ($pconnect)
        {
            if (!($this->link_id = @mysql_pconnect($dbhost, $dbuser, $dbpw)))
            {
                if (!$quiet)
                {
                    $this->ErrorMsg("Can't pConnect MySQL Server($dbhost)!");
                }

                return false;
            }
        }
        else
        {
            if (PHP_VERSION >= '4.2')
            {
                $this->link_id = mysql_connect($dbhost, $dbuser, $dbpw, true);
            }
            else
            {
                $this->link_id = mysql_connect($dbhost, $dbuser, $dbpw);

                mt_srand((double)microtime() * 1000000); // 对 PHP 4.2 以下的版本进行随机数函数的初始化工作
            }
            if (!$this->link_id)
            {
                if (!$quiet)
                {
                    $this->ErrorMsg("Can't Connect MySQL Server($dbhost)!");
                }

                return false;
            }
        }

       
        /* 如果mysql 版本是 4.1+ 以上，需要对字符集进行初始化 */
        if ($this->version > '4.1')
        {
            if ($charset != 'latin1')
            {
                mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary", $this->link_id);
            }
            if ($this->version > '5.0.1')
            {
                mysql_query("SET sql_mode=''", $this->link_id);
            }
        }

    mysql_query("set names utf8");

        /* 选择数据库 */
        if ($dbname)
        {
            if (mysql_select_db($dbname, $this->link_id) === false )
            {
                if (!$quiet)
                {
                    $this->ErrorMsg("Can't select MySQL database($dbname)!");
                }

                return false;
            }
            else
            {
                return true;
            }
        }
        else
        {
            return true;
        }
    }

    function select_database($dbname)
    {
        return mysql_select_db($dbname, $this->link_id);
    }

    function set_mysql_charset($charset)
    {
        /* 如果mysql 版本是 4.1+ 以上，需要对字符集进行初始化 */
        if ($this->version > '4.1')
        {
            if (in_array(strtolower($charset), array('gbk', 'big5', 'utf-8', 'utf8')))
            {
                $charset = str_replace('-', '', $charset);
            }
            if ($charset != 'latin1')
            {
                mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary", $this->link_id);
            }
        }
    }

    function fetch_array($query, $result_type = MYSQL_ASSOC)
    {
        return mysql_fetch_array($query, $result_type);
    }

    function query($sql, $type = '')
    {
        if ($this->link_id === NULL)
        {
            $this->connect($this->settings['dbhost'], $this->settings['dbuser'], $this->settings['dbpw'], $this->settings['dbname'], $this->settings['charset'], $this->settings['pconnect']);
            $this->settings = array();
        }

        if ($this->queryCount++ <= 99)
        {
            $this->queryLog[] = $sql;
        }
        if ($this->queryTime == '')
        {
            if (PHP_VERSION >= '5.0.0')
            {
                $this->queryTime = microtime(true);
            }
            else
            {
                $this->queryTime = microtime();
            }
        }

        /* 当当前的时间大于类初始化时间的时候，自动执行 ping 这个自动重新连接操作 */
        if (PHP_VERSION >= '4.3' && time() > $this->starttime + 1)
        {
            mysql_ping($this->link_id);
        }

        if (!($query = mysql_query($sql, $this->link_id)) && $type != 'SILENT')
        {
            $this->error_message[]['message'] = 'MySQL Query Error';
            $this->error_message[]['sql'] = $sql;
            $this->error_message[]['error'] = mysql_error($this->link_id);
            $this->error_message[]['errno'] = mysql_errno($this->link_id);

            $this->ErrorMsg();

            return false;
        }

      
        return $query;
    }

    function affected_rows()
    {
        return mysql_affected_rows($this->link_id);
    }

    function error()
    {
        return mysql_error($this->link_id);
    }

    function errno()
    {
        return mysql_errno($this->link_id);
    }

    function result($query, $row)
    {
        return @mysql_result($query, $row);
    }

    function num_rows($query)
    {
        return mysql_num_rows($query);
    }

    function num_fields($query)
    {
        return mysql_num_fields($query);
    }

    function free_result($query)
    {
        return mysql_free_result($query);
    }

    function insert_id()
    {
        return mysql_insert_id($this->link_id);
    }

    function fetchRow($query)
    {
        return mysql_fetch_assoc($query);
    }

    function fetch_fields($query)
    {
        return mysql_fetch_field($query);
    }


    function ping()
    {
        if (PHP_VERSION >= '4.3')
        {
            return mysql_ping($this->link_id);
        }
        else
        {
            return false;
        }
    }

    function escape_string($unescaped_string)
    {
        if (PHP_VERSION >= '4.3')
        {
            return mysql_real_escape_string($unescaped_string);
        }
        else
        {
            return mysql_escape_string($unescaped_string);
        }
    }

    function close()
    {
        return mysql_close($this->link_id);
    }

    function ErrorMsg($message = '', $sql = '')
    {
        if ($message)
        {
            echo "<b>ECSHOP info</b>: $message\n\n<br /><br />";
            //print('<a href="http://faq.comsenz.com/?type=mysql&dberrno=2003&dberror=Can%27t%20connect%20to%20MySQL%20server%20on" target="_blank">http://faq.comsenz.com/</a>');
        }
        else
        {
            echo "<b>MySQL server error report:";
            print_r($this->error_message);
            //echo "<br /><br /><a href='http://faq.comsenz.com/?type=mysql&dberrno=" . $this->error_message[3]['errno'] . "&dberror=" . urlencode($this->error_message[2]['error']) . "' target='_blank'>http://faq.comsenz.com/</a>";
        }

        exit;
    }

/* 仿真 Adodb 函数 */
    function selectLimit($sql, $num, $start = 0)
    {
        if ($start == 0)
        {
            $sql .= ' LIMIT ' . $num;
        }
        else
        {
            $sql .= ' LIMIT ' . $start . ', ' . $num;
        }
		
		

        return $this->query($sql);
    }
	
	    function selectLimits($sql, $num, $start = 0)
    {
        if ($start == 0)
        {
            $sql .= ' LIMIT ' . $num;
        }
        else
        {
            $sql .= ' LIMIT ' . $start . ', ' . $num;
        }
		
		

        return $this->getAll($sql);
    }

    function getOne($sql, $limited = false)
    {
        if ($limited == true)
        {
            $sql = trim($sql . ' LIMIT 1');
        }

        $res = $this->query($sql);
        if ($res !== false)
        {
            $row = mysql_fetch_row($res);

            if ($row !== false)
            {
                return $row[0];
            }
            else
            {
                return '';
            }
        }
        else
        {
            return false;
        }
    }

    function getAll($sql)
    {
        $res = $this->query($sql);
        if ($res !== false)
        {
            $arr = array();
            while ($row = mysql_fetch_assoc($res))
            {
                $arr[] = $row;
            }

            return $arr;
        }
        else
        {
            return false;
        }
    }


    function getRow($sql, $limited = false)
    {
        if ($limited == true)
        {
            $sql = trim($sql . ' LIMIT 1');
        }

        $res = $this->query($sql);
        if ($res !== false)
        {
            return mysql_fetch_assoc($res);
        }
        else
        {
            return false;
        }
    }

  

    function getCol($sql)
    {
        $res = $this->query($sql);
        if ($res !== false)
        {
            $arr = array();
            while ($row = mysql_fetch_row($res))
            {
                $arr[] = $row[0];
            }

            return $arr;
        }
        else
        {
            return false;
        }
    }

   
   
    

    function setMaxCacheTime($second)
    {
        $this->max_cache_time = $second;
    }

    function getMaxCacheTime()
    {
        return $this->max_cache_time;
    }




   
}

?>
<?php
    class Session {
        public static function init() {
            if(!session_id())
                session_start();
        }

        public static function setKey($key, $value) {
            if(session_id()) {
                $_SESSION[$key] = $value;
                return TRUE;   
            } else {
                return FALSE;
            }
        }

        public static function getKey($key) {
            if(session_id() && isset($_SESSION[$key]))
                return $_SESSION[$key];
            return NULL;
        }

        public static function destroy() {
            session_unset();
            session_destroy();
        }

        public static function Auth() {
            Session::init();
            if(isset($_SESSION['uname'])) return TRUE;
            else
            return FALSE;
        }
    }
?>
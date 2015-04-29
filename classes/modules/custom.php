<?php
	class custom extends def_module {
		public function cms_callMethod($method_name, $args) {
			return call_user_func_array(Array($this, $method_name), $args);
		}
		
		public function __call($method, $args) {
			throw new publicException("Method " . get_class($this) . "::" . $method . " doesn't exists");
		}
		//TODO: Write your own macroses here

        public function includeQuickEditJs() {
            $system = system_buildin_load('system');

            $return = $system->includeQuickEditJs();

            $return = '<script type="text/javascript" charset="utf-8" src="/js/custom/jquery/jquery-migrate-1.2.1.min.js"></script>'. $return;

            $return = str_replace('/js/jquery/jquery.js', '/js/custom/jquery/sizzle.min.js', $return);

            return $return;
        }
	};
?>
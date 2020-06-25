<?php
/**
 * ConcreteServiceProvider class file.
 *
 * @package Automattic\WooCommerce\Tests\DependencyManagement
 */

namespace Automattic\WooCommerce\Tests\DependencyManagement;

use Automattic\WooCommerce\DependencyManagement\AbstractServiceProvider;
use League\Container\Definition\DefinitionInterface;

/**
 * An concrete implementation of AbstractServiceProvider.
 * We need this to actually get an instance that we can test.
 */
class ConcreteServiceProvider extends AbstractServiceProvider {

	/**
	 * Public version of add_with_auto_arguments, which is usually protected.
	 *
	 * @param string $class_name Class name.
	 * @param null   $concrete Concrete.
	 * @param bool   $shared Shared or not.
	 *
	 * @return DefinitionInterface The created interface.
	 * @throws \Exception Something went wrong.
	 */
	public function add_with_auto_arguments( string $class_name, $concrete = null, bool $shared = false ) : DefinitionInterface {
		return parent::add_with_auto_arguments( $class_name, $concrete, $shared );
	}

	/**
	 * The mandatory 'register' method (defined in AbstractServiceProvider).
	 * Not implemented because this class is tested on its own, not as a service provider actually registered on a container.
	 */
	public function register() {
	}
}

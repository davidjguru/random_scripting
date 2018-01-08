<?php
  namespace Drupal\hello_world_with_form\Controller;

  use Drupal\Core\Controller\ControllerBase;
  use Drupal\hello_world_with_form\HelloWorldWithFormSalutation;
  use Symfony\Component\DependencyInjection\ContainerInterface;

/*
 * Controller for the salutation message.
 *
 */



class HelloWorldWithFormController extends ControllerBase {

      /**
	*  @var \Drupal\hello_world\HelloWorldWithServiceSalutation
        */

	protected $salutation;
	
	/**
	 * * HelloWorldWithServiceController constructor.
	 * *
	 * * @param \Drupal\hello_world_with_service\HelloWorldWithServiceSalutation $salutation
	 * */

	public function __construct(HelloWorldWithFormSalutation $salutation) {
		$this->salutation = $salutation;
	}
	
	/**
	* * {@inheritdoc}
	* */
  
	public static function create(ContainerInterface $container) {
		return new static(
			$container->get('hello_world_with_form.salutation')
		);
	}


/*
 * Hello World.
 *
 * @return string
 */

  public function helloWorldWithForm() {
        return [
             '#markup' => $this->salutation->getSalutation(),
               ];
        }


}

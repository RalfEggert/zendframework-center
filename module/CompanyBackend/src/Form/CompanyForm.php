<?php
/**
 * ZF3 book Zend Framework Center Example Application
 *
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/zf3buch/zendframework-center
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace CompanyBackend\Form;

use Zend\Form\Element\Csrf;
use Zend\Form\Element\File;
use Zend\Form\Element\Select;
use Zend\Form\Element\Submit;
use Zend\Form\Element\Text;
use Zend\Form\Form;

/**
 * Class CompanyForm
 *
 * @package CompanyBackend\Form
 */
class CompanyForm extends Form implements CompanyFormInterface
{
    /**
     * @var array
     */
    private $statusOptions;

    /**
     * @param array $statusOptions
     */
    public function setStatusOptions($statusOptions)
    {
        $this->statusOptions = $statusOptions;
    }

    /**
     * Init form
     */
    public function init()
    {
        $this->setName('company_form');
        $this->setAttribute('class', 'form-horizontal');

        $this->add(
            [
                'type' => Csrf::class,
                'name' => 'csrf',
            ]
        );

        $this->add(
            [
                'type'       => Select::class,
                'name'       => 'status',
                'attributes' => [
                    'class' => 'form-control',
                ],
                'options'    => [
                    'value_options'    => $this->statusOptions,
                    'label'            => 'Status',
                    'label_attributes' => [
                        'class' => 'col-sm-2 control-label',
                    ],
                ],
            ]
        );

        $this->add(
            [
                'type'       => Text::class,
                'name'       => 'name',
                'attributes' => [
                    'class' => 'form-control',
                ],
                'options'    => [
                    'label'            => 'Firmenname',
                    'label_attributes' => [
                        'class' => 'col-sm-2 control-label',
                    ],
                ],
            ]
        );

        $this->add(
            [
                'type'       => Text::class,
                'name'       => 'email',
                'attributes' => [
                    'class' => 'form-control',
                ],
                'options'    => [
                    'label'            => 'E-Mail Adresse',
                    'label_attributes' => [
                        'class' => 'col-sm-2 control-label',
                    ],
                ],
            ]
        );

        $this->add(
            [
                'type'       => Text::class,
                'name'       => 'contact',
                'attributes' => [
                    'class' => 'form-control',
                ],
                'options'    => [
                    'label'            => 'Ansprechpartner',
                    'label_attributes' => [
                        'class' => 'col-sm-2 control-label',
                    ],
                ],
            ]
        );

        $this->add(
            [
                'type'       => File::class,
                'name'       => 'logo',
                'attributes' => [
                    'class' => 'form-control-static',
                ],
                'options'    => [
                    'label'            => 'Logo',
                    'label_attributes' => [
                        'class' => 'col-sm-2 control-label',
                    ],
                ],
            ]
        );

        $this->add(
            [
                'type'       => Submit::class,
                'name'       => 'save_company',
                'options'    => [],
                'attributes' => [
                    'id'    => 'save_company',
                    'class' => 'btn btn-primary',
                    'value' => 'Unternehmen speichern',
                ],
            ]
        );
    }

    /**
     * Switch to add mode
     */
    public function addMode()
    {
        if ($this->has('logo')) {
            $this->remove('logo');
        }

        $this->setValidationGroup(array_keys($this->getElements()));
    }

    /**
     * Switch to edit mode
     */
    public function editMode()
    {
        if ($this->has('status')) {
            $this->remove('status');
        }

        $this->setValidationGroup(array_keys($this->getElements()));
    }
}
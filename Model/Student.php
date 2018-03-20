<?php

namespace Blackbird\TeacherStudents\Model;

use Magento\Framework\Model\AbstractModel;
use Blackbird\TeacherStudents\Api\Data\StudentInterface;

/**
 * Class Student
 * @package Blackbird\TeacherStudents\Model
 */
class Student extends AbstractModel implements StudentInterface
{
    protected function _construct()
    {
        $this->_init(\Blackbird\TeacherStudents\Model\ResourceModel\Student::class);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * {@inheritdoc}
     */
    public function getAge()
    {
        return $this->getData(self::AGE);
    }

    /**
     * {@inheritdoc}
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function setAge($age)
    {
        return $this->setData(self::AGE, $age);
    }
}
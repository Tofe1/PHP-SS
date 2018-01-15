<?php
namespace Home\Model;
use Think\Model;
class ContactModel extends Model {
    protected $_validate = array(
        array('name','require','昵称不能为空！',1,'regex',3),
        array('email','require','email不能为空！',1,'regex',3),
        array('subject','require','subject不能为空！',1,'regex',3),
        array('messages','require','messages不能为空！',1,'regex',3),
        // array('catename','','链接名称已经存在！',1,'unique',3), 
      );
}
<?php
namespace Home\Model;
use Think\Model;
class ServiceModel extends Model {
    protected $_validate = array(
        array('catename','require','添加链接不能为空！',1,'regex',3),
        array('catename','','链接名称已经存在！',1,'unique',3), 
      );
}
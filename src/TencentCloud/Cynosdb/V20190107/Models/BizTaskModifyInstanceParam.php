<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getInstanceId() Obtain 
 * @method void setInstanceId(string $InstanceId) Set 
 * @method array getModifyInstanceParamList() Obtain Details of instance parameter modification task.
 * @method void setModifyInstanceParamList(array $ModifyInstanceParamList) Set Details of instance parameter modification task.
 */
class BizTaskModifyInstanceParam extends AbstractModel
{
    /**
     * @var string 
     */
    public $InstanceId;

    /**
     * @var array Details of instance parameter modification task.
     */
    public $ModifyInstanceParamList;

    /**
     * @param string $InstanceId 
     * @param array $ModifyInstanceParamList Details of instance parameter modification task.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ModifyInstanceParamList",$param) and $param["ModifyInstanceParamList"] !== null) {
            $this->ModifyInstanceParamList = [];
            foreach ($param["ModifyInstanceParamList"] as $key => $value){
                $obj = new ModifyParamItem();
                $obj->deserialize($value);
                array_push($this->ModifyInstanceParamList, $obj);
            }
        }
    }
}

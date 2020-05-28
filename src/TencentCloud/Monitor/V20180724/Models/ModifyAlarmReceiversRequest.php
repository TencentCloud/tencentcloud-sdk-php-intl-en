<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmReceivers request structure.
 *
 * @method integer getGroupId() Obtain ID of a policy group whose recipient needs to be modified.
 * @method void setGroupId(integer $GroupId) Set ID of a policy group whose recipient needs to be modified.
 * @method string getModule() Obtain Required. The value is fixed to monitor.
 * @method void setModule(string $Module) Set Required. The value is fixed to monitor.
 * @method array getReceiverInfos() Obtain New recipient information. If this parameter is not configured, all recipients will be deleted.
 * @method void setReceiverInfos(array $ReceiverInfos) Set New recipient information. If this parameter is not configured, all recipients will be deleted.
 */
class ModifyAlarmReceiversRequest extends AbstractModel
{
    /**
     * @var integer ID of a policy group whose recipient needs to be modified.
     */
    public $GroupId;

    /**
     * @var string Required. The value is fixed to monitor.
     */
    public $Module;

    /**
     * @var array New recipient information. If this parameter is not configured, all recipients will be deleted.
     */
    public $ReceiverInfos;

    /**
     * @param integer $GroupId ID of a policy group whose recipient needs to be modified.
     * @param string $Module Required. The value is fixed to monitor.
     * @param array $ReceiverInfos New recipient information. If this parameter is not configured, all recipients will be deleted.
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("ReceiverInfos",$param) and $param["ReceiverInfos"] !== null) {
            $this->ReceiverInfos = [];
            foreach ($param["ReceiverInfos"] as $key => $value){
                $obj = new ReceiverInfo();
                $obj->deserialize($value);
                array_push($this->ReceiverInfos, $obj);
            }
        }
    }
}

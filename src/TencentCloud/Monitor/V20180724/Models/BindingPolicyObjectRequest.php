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
 * BindingPolicyObject request structure.
 *
 * @method string getModule() Obtain Required. The value is fixed to monitor.
 * @method void setModule(string $Module) Set Required. The value is fixed to monitor.
 * @method integer getGroupId() Obtain Policy group ID, such as `4739573`. This parameter will be disused soon. Another parameter `PolicyId` is recommended.
 * @method void setGroupId(integer $GroupId) Set Policy group ID, such as `4739573`. This parameter will be disused soon. Another parameter `PolicyId` is recommended.
 * @method string getPolicyId() Obtain Alarm policy ID, such as `policy-gh892hg0`. At least one of the two parameters, `PolicyId` and `GroupId`, must be specified; otherwise, an error will be reported. `PolicyId` is preferred over `GroupId` when both of them are specified.
 * @method void setPolicyId(string $PolicyId) Set Alarm policy ID, such as `policy-gh892hg0`. At least one of the two parameters, `PolicyId` and `GroupId`, must be specified; otherwise, an error will be reported. `PolicyId` is preferred over `GroupId` when both of them are specified.
 * @method integer getInstanceGroupId() Obtain Instance group ID.
 * @method void setInstanceGroupId(integer $InstanceGroupId) Set Instance group ID.
 * @method array getDimensions() Obtain Dimensions of an object to be bound.
 * @method void setDimensions(array $Dimensions) Set Dimensions of an object to be bound.
 * @method string getEbSubject() Obtain The alert configured for an event
 * @method void setEbSubject(string $EbSubject) Set The alert configured for an event
 * @method integer getEbEventFlag() Obtain Whether the event alert has been configured
 * @method void setEbEventFlag(integer $EbEventFlag) Set Whether the event alert has been configured
 */
class BindingPolicyObjectRequest extends AbstractModel
{
    /**
     * @var string Required. The value is fixed to monitor.
     */
    public $Module;

    /**
     * @var integer Policy group ID, such as `4739573`. This parameter will be disused soon. Another parameter `PolicyId` is recommended.
     */
    public $GroupId;

    /**
     * @var string Alarm policy ID, such as `policy-gh892hg0`. At least one of the two parameters, `PolicyId` and `GroupId`, must be specified; otherwise, an error will be reported. `PolicyId` is preferred over `GroupId` when both of them are specified.
     */
    public $PolicyId;

    /**
     * @var integer Instance group ID.
     */
    public $InstanceGroupId;

    /**
     * @var array Dimensions of an object to be bound.
     */
    public $Dimensions;

    /**
     * @var string The alert configured for an event
     */
    public $EbSubject;

    /**
     * @var integer Whether the event alert has been configured
     */
    public $EbEventFlag;

    /**
     * @param string $Module Required. The value is fixed to monitor.
     * @param integer $GroupId Policy group ID, such as `4739573`. This parameter will be disused soon. Another parameter `PolicyId` is recommended.
     * @param string $PolicyId Alarm policy ID, such as `policy-gh892hg0`. At least one of the two parameters, `PolicyId` and `GroupId`, must be specified; otherwise, an error will be reported. `PolicyId` is preferred over `GroupId` when both of them are specified.
     * @param integer $InstanceGroupId Instance group ID.
     * @param array $Dimensions Dimensions of an object to be bound.
     * @param string $EbSubject The alert configured for an event
     * @param integer $EbEventFlag Whether the event alert has been configured
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new BindingPolicyObjectDimension();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }

        if (array_key_exists("EbSubject",$param) and $param["EbSubject"] !== null) {
            $this->EbSubject = $param["EbSubject"];
        }

        if (array_key_exists("EbEventFlag",$param) and $param["EbEventFlag"] !== null) {
            $this->EbEventFlag = $param["EbEventFlag"];
        }
    }
}

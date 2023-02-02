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
 * UnBindingPolicyObject request structure.
 *
 * @method string getModule() Obtain The value is fixed to monitor.
 * @method void setModule(string $Module) Set The value is fixed to monitor.
 * @method integer getGroupId() Obtain Policy group ID. If `PolicyId` is used, this parameter will be ignored, and any value, e.g., `0`, can be passed in.
 * @method void setGroupId(integer $GroupId) Set Policy group ID. If `PolicyId` is used, this parameter will be ignored, and any value, e.g., `0`, can be passed in.
 * @method array getUniqueId() Obtain List of unique IDs of the object instances to be deleted. `UniqueId` can be obtained from the output parameter `List` of the [DescribeBindingPolicyObjectList](https://intl.cloud.tencent.com/document/api/248/40570?from_cn_redirect=1) API
 * @method void setUniqueId(array $UniqueId) Set List of unique IDs of the object instances to be deleted. `UniqueId` can be obtained from the output parameter `List` of the [DescribeBindingPolicyObjectList](https://intl.cloud.tencent.com/document/api/248/40570?from_cn_redirect=1) API
 * @method integer getInstanceGroupId() Obtain Instance group ID. The `UniqueId` parameter is invalid if object instances are deleted by instance group.
 * @method void setInstanceGroupId(integer $InstanceGroupId) Set Instance group ID. The `UniqueId` parameter is invalid if object instances are deleted by instance group.
 * @method string getPolicyId() Obtain Alarm policy ID. If this parameter is used, `GroupId` will be ignored.
 * @method void setPolicyId(string $PolicyId) Set Alarm policy ID. If this parameter is used, `GroupId` will be ignored.
 * @method string getEbSubject() Obtain The alert configured for an event
 * @method void setEbSubject(string $EbSubject) Set The alert configured for an event
 * @method integer getEbEventFlag() Obtain Whether the event alert has been configured
 * @method void setEbEventFlag(integer $EbEventFlag) Set Whether the event alert has been configured
 */
class UnBindingPolicyObjectRequest extends AbstractModel
{
    /**
     * @var string The value is fixed to monitor.
     */
    public $Module;

    /**
     * @var integer Policy group ID. If `PolicyId` is used, this parameter will be ignored, and any value, e.g., `0`, can be passed in.
     */
    public $GroupId;

    /**
     * @var array List of unique IDs of the object instances to be deleted. `UniqueId` can be obtained from the output parameter `List` of the [DescribeBindingPolicyObjectList](https://intl.cloud.tencent.com/document/api/248/40570?from_cn_redirect=1) API
     */
    public $UniqueId;

    /**
     * @var integer Instance group ID. The `UniqueId` parameter is invalid if object instances are deleted by instance group.
     */
    public $InstanceGroupId;

    /**
     * @var string Alarm policy ID. If this parameter is used, `GroupId` will be ignored.
     */
    public $PolicyId;

    /**
     * @var string The alert configured for an event
     */
    public $EbSubject;

    /**
     * @var integer Whether the event alert has been configured
     */
    public $EbEventFlag;

    /**
     * @param string $Module The value is fixed to monitor.
     * @param integer $GroupId Policy group ID. If `PolicyId` is used, this parameter will be ignored, and any value, e.g., `0`, can be passed in.
     * @param array $UniqueId List of unique IDs of the object instances to be deleted. `UniqueId` can be obtained from the output parameter `List` of the [DescribeBindingPolicyObjectList](https://intl.cloud.tencent.com/document/api/248/40570?from_cn_redirect=1) API
     * @param integer $InstanceGroupId Instance group ID. The `UniqueId` parameter is invalid if object instances are deleted by instance group.
     * @param string $PolicyId Alarm policy ID. If this parameter is used, `GroupId` will be ignored.
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

        if (array_key_exists("UniqueId",$param) and $param["UniqueId"] !== null) {
            $this->UniqueId = $param["UniqueId"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("EbSubject",$param) and $param["EbSubject"] !== null) {
            $this->EbSubject = $param["EbSubject"];
        }

        if (array_key_exists("EbEventFlag",$param) and $param["EbEventFlag"] !== null) {
            $this->EbEventFlag = $param["EbEventFlag"];
        }
    }
}

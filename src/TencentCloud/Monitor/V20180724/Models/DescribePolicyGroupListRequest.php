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
 * DescribePolicyGroupList request structure.
 *
 * @method string getModule() Obtain The value is fixed to monitor.
 * @method void setModule(string $Module) Set The value is fixed to monitor.
 * @method integer getLimit() Obtain Number of parameters that can be returned on each page. Value range: 1 - 100.
 * @method void setLimit(integer $Limit) Set Number of parameters that can be returned on each page. Value range: 1 - 100.
 * @method integer getOffset() Obtain Parameter offset on each page. The value starts from 0.
 * @method void setOffset(integer $Offset) Set Parameter offset on each page. The value starts from 0.
 * @method string getLike() Obtain Search by policy name.
 * @method void setLike(string $Like) Set Search by policy name.
 * @method integer getInstanceGroupId() Obtain Instance group ID.
 * @method void setInstanceGroupId(integer $InstanceGroupId) Set Instance group ID.
 * @method string getUpdateTimeOrder() Obtain Sort by update time. Valid values: asc and desc.
 * @method void setUpdateTimeOrder(string $UpdateTimeOrder) Set Sort by update time. Valid values: asc and desc.
 * @method array getProjectIds() Obtain Project ID list.
 * @method void setProjectIds(array $ProjectIds) Set Project ID list.
 * @method array getViewNames() Obtain List of alarm policy types.
 * @method void setViewNames(array $ViewNames) Set List of alarm policy types.
 * @method integer getFilterUnuseReceiver() Obtain Whether to filter policy groups without recipients. The value 1 indicates that policy groups without recipients will be filtered. The value 0 indicates that policy groups without recipients will not be filtered.
 * @method void setFilterUnuseReceiver(integer $FilterUnuseReceiver) Set Whether to filter policy groups without recipients. The value 1 indicates that policy groups without recipients will be filtered. The value 0 indicates that policy groups without recipients will not be filtered.
 * @method array getReceivers() Obtain Filter by recipient group.
 * @method void setReceivers(array $Receivers) Set Filter by recipient group.
 * @method array getReceiverUserList() Obtain Filter by recipient.
 * @method void setReceiverUserList(array $ReceiverUserList) Set Filter by recipient.
 * @method string getDimensions() Obtain Dimension set field (json string), for example, [[{"name":"unInstanceId","value":"ins-6e4b2aaa"}]].
 * @method void setDimensions(string $Dimensions) Set Dimension set field (json string), for example, [[{"name":"unInstanceId","value":"ins-6e4b2aaa"}]].
 * @method string getConditionTempGroupId() Obtain Template-based policy group IDs, which are separated by commas.
 * @method void setConditionTempGroupId(string $ConditionTempGroupId) Set Template-based policy group IDs, which are separated by commas.
 * @method string getReceiverType() Obtain Filter by recipient or recipient group. The value 'user' indicates by recipient. The value 'group' indicates by recipient group.
 * @method void setReceiverType(string $ReceiverType) Set Filter by recipient or recipient group. The value 'user' indicates by recipient. The value 'group' indicates by recipient group.
 * @method boolean getIsOpen() Obtain Filter conditions. Whether the alarm policy has been enabled or disabled
 * @method void setIsOpen(boolean $IsOpen) Set Filter conditions. Whether the alarm policy has been enabled or disabled
 */
class DescribePolicyGroupListRequest extends AbstractModel
{
    /**
     * @var string The value is fixed to monitor.
     */
    public $Module;

    /**
     * @var integer Number of parameters that can be returned on each page. Value range: 1 - 100.
     */
    public $Limit;

    /**
     * @var integer Parameter offset on each page. The value starts from 0.
     */
    public $Offset;

    /**
     * @var string Search by policy name.
     */
    public $Like;

    /**
     * @var integer Instance group ID.
     */
    public $InstanceGroupId;

    /**
     * @var string Sort by update time. Valid values: asc and desc.
     */
    public $UpdateTimeOrder;

    /**
     * @var array Project ID list.
     */
    public $ProjectIds;

    /**
     * @var array List of alarm policy types.
     */
    public $ViewNames;

    /**
     * @var integer Whether to filter policy groups without recipients. The value 1 indicates that policy groups without recipients will be filtered. The value 0 indicates that policy groups without recipients will not be filtered.
     */
    public $FilterUnuseReceiver;

    /**
     * @var array Filter by recipient group.
     */
    public $Receivers;

    /**
     * @var array Filter by recipient.
     */
    public $ReceiverUserList;

    /**
     * @var string Dimension set field (json string), for example, [[{"name":"unInstanceId","value":"ins-6e4b2aaa"}]].
     */
    public $Dimensions;

    /**
     * @var string Template-based policy group IDs, which are separated by commas.
     */
    public $ConditionTempGroupId;

    /**
     * @var string Filter by recipient or recipient group. The value 'user' indicates by recipient. The value 'group' indicates by recipient group.
     */
    public $ReceiverType;

    /**
     * @var boolean Filter conditions. Whether the alarm policy has been enabled or disabled
     */
    public $IsOpen;

    /**
     * @param string $Module The value is fixed to monitor.
     * @param integer $Limit Number of parameters that can be returned on each page. Value range: 1 - 100.
     * @param integer $Offset Parameter offset on each page. The value starts from 0.
     * @param string $Like Search by policy name.
     * @param integer $InstanceGroupId Instance group ID.
     * @param string $UpdateTimeOrder Sort by update time. Valid values: asc and desc.
     * @param array $ProjectIds Project ID list.
     * @param array $ViewNames List of alarm policy types.
     * @param integer $FilterUnuseReceiver Whether to filter policy groups without recipients. The value 1 indicates that policy groups without recipients will be filtered. The value 0 indicates that policy groups without recipients will not be filtered.
     * @param array $Receivers Filter by recipient group.
     * @param array $ReceiverUserList Filter by recipient.
     * @param string $Dimensions Dimension set field (json string), for example, [[{"name":"unInstanceId","value":"ins-6e4b2aaa"}]].
     * @param string $ConditionTempGroupId Template-based policy group IDs, which are separated by commas.
     * @param string $ReceiverType Filter by recipient or recipient group. The value 'user' indicates by recipient. The value 'group' indicates by recipient group.
     * @param boolean $IsOpen Filter conditions. Whether the alarm policy has been enabled or disabled
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Like",$param) and $param["Like"] !== null) {
            $this->Like = $param["Like"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("UpdateTimeOrder",$param) and $param["UpdateTimeOrder"] !== null) {
            $this->UpdateTimeOrder = $param["UpdateTimeOrder"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("ViewNames",$param) and $param["ViewNames"] !== null) {
            $this->ViewNames = $param["ViewNames"];
        }

        if (array_key_exists("FilterUnuseReceiver",$param) and $param["FilterUnuseReceiver"] !== null) {
            $this->FilterUnuseReceiver = $param["FilterUnuseReceiver"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("ReceiverUserList",$param) and $param["ReceiverUserList"] !== null) {
            $this->ReceiverUserList = $param["ReceiverUserList"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("ConditionTempGroupId",$param) and $param["ConditionTempGroupId"] !== null) {
            $this->ConditionTempGroupId = $param["ConditionTempGroupId"];
        }

        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }
    }
}

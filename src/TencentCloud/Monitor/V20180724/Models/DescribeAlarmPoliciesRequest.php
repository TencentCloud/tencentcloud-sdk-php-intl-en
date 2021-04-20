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
 * DescribeAlarmPolicies request structure.
 *
 * @method string getModule() Obtain Value fixed at "monitor"
 * @method void setModule(string $Module) Set Value fixed at "monitor"
 * @method integer getPageNumber() Obtain Page number starting from 1. Default value: 1
 * @method void setPageNumber(integer $PageNumber) Set Page number starting from 1. Default value: 1
 * @method integer getPageSize() Obtain Number of entries per page. Value range: 1–100. Default value: 20
 * @method void setPageSize(integer $PageSize) Set Number of entries per page. Value range: 1–100. Default value: 20
 * @method string getPolicyName() Obtain Fuzzy search by policy name
 * @method void setPolicyName(string $PolicyName) Set Fuzzy search by policy name
 * @method array getMonitorTypes() Obtain Filter by monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring). If this parameter is left empty, all will be queried by default
 * @method void setMonitorTypes(array $MonitorTypes) Set Filter by monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring). If this parameter is left empty, all will be queried by default
 * @method array getNamespaces() Obtain Filter by namespace. For the values of different policy types, please see:
[Policy Type List](https://intl.cloud.tencent.com/document/product/248/50397?from_cn_redirect=1)
 * @method void setNamespaces(array $Namespaces) Set Filter by namespace. For the values of different policy types, please see:
[Policy Type List](https://intl.cloud.tencent.com/document/product/248/50397?from_cn_redirect=1)
 * @method string getDimensions() Obtain Alarm object list. The outer array corresponds to multiple instances.
Each inner array corresponds to one instance, where `object` corresponds to the dimension information of the instance. The format is as follows:
[
	[{"name":"unInstanceId","value":"ins-qr888845g"}],
	[{"name":"unInstanceId","value":"ins-qr8d555g"}]
	...
]
For the samples for different Tencent Cloud services, please see:
[Dimension List](https://intl.cloud.tencent.com/document/product/248/50397?from_cn_redirect=1)
 * @method void setDimensions(string $Dimensions) Set Alarm object list. The outer array corresponds to multiple instances.
Each inner array corresponds to one instance, where `object` corresponds to the dimension information of the instance. The format is as follows:
[
	[{"name":"unInstanceId","value":"ins-qr888845g"}],
	[{"name":"unInstanceId","value":"ins-qr8d555g"}]
	...
]
For the samples for different Tencent Cloud services, please see:
[Dimension List](https://intl.cloud.tencent.com/document/product/248/50397?from_cn_redirect=1)
 * @method array getReceiverUids() Obtain Search by recipient `uid`, which should be queried by calling the CAM API. For more information, please see:
[ListUsers](https://intl.cloud.tencent.com/document/product/598/34587?from_cn_redirect=1)
 * @method void setReceiverUids(array $ReceiverUids) Set Search by recipient `uid`, which should be queried by calling the CAM API. For more information, please see:
[ListUsers](https://intl.cloud.tencent.com/document/product/598/34587?from_cn_redirect=1)
 * @method array getReceiverGroups() Obtain Search by recipient group `uid`, which should be queried by calling the CAM API. For more information, please see:
[ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1)
 * @method void setReceiverGroups(array $ReceiverGroups) Set Search by recipient group `uid`, which should be queried by calling the CAM API. For more information, please see:
[ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1)
 * @method array getPolicyType() Obtain Filter by default policy. Valid values: DEFAULT (display default policy), NOT_DEFAULT (display non-default policies). If this parameter is left empty, all policies will be displayed
 * @method void setPolicyType(array $PolicyType) Set Filter by default policy. Valid values: DEFAULT (display default policy), NOT_DEFAULT (display non-default policies). If this parameter is left empty, all policies will be displayed
 * @method string getField() Obtain Sort by field. For example, to sort by the last modification time, use Field: "UpdateTime".
 * @method void setField(string $Field) Set Sort by field. For example, to sort by the last modification time, use Field: "UpdateTime".
 * @method string getOrder() Obtain Sort order. Valid values: ASC (ascending), DESC (descending)
 * @method void setOrder(string $Order) Set Sort order. Valid values: ASC (ascending), DESC (descending)
 * @method array getProjectIds() Obtain ID array of the policy project, which can be viewed on the following page:
[Project Management](https://console.cloud.tencent.com/project)
 * @method void setProjectIds(array $ProjectIds) Set ID array of the policy project, which can be viewed on the following page:
[Project Management](https://console.cloud.tencent.com/project)
 * @method array getNoticeIds() Obtain ID list of the notification template, which can be obtained by querying the notification template list.
[DescribeAlarmNotices](https://intl.cloud.tencent.com/document/product/248/51280?from_cn_redirect=1)
 * @method void setNoticeIds(array $NoticeIds) Set ID list of the notification template, which can be obtained by querying the notification template list.
[DescribeAlarmNotices](https://intl.cloud.tencent.com/document/product/248/51280?from_cn_redirect=1)
 * @method array getRuleTypes() Obtain Filter by trigger condition. Valid values: STATIC (display policies with static threshold), DYNAMIC (display policies with dynamic threshold). If this parameter is left empty, all policies will be displayed
 * @method void setRuleTypes(array $RuleTypes) Set Filter by trigger condition. Valid values: STATIC (display policies with static threshold), DYNAMIC (display policies with dynamic threshold). If this parameter is left empty, all policies will be displayed
 * @method array getEnable() Obtain Filter by alarm status. Valid values: [1]: enabled; [0]: disabled; [0, 1]: all
 * @method void setEnable(array $Enable) Set Filter by alarm status. Valid values: [1]: enabled; [0]: disabled; [0, 1]: all
 * @method integer getNotBindingNoticeRule() Obtain If `1` is passed in, alarm policies with no notification rules configured are queried. If it is left empty or other values are passed in, all alarm policies are queried.
 * @method void setNotBindingNoticeRule(integer $NotBindingNoticeRule) Set If `1` is passed in, alarm policies with no notification rules configured are queried. If it is left empty or other values are passed in, all alarm policies are queried.
 */
class DescribeAlarmPoliciesRequest extends AbstractModel
{
    /**
     * @var string Value fixed at "monitor"
     */
    public $Module;

    /**
     * @var integer Page number starting from 1. Default value: 1
     */
    public $PageNumber;

    /**
     * @var integer Number of entries per page. Value range: 1–100. Default value: 20
     */
    public $PageSize;

    /**
     * @var string Fuzzy search by policy name
     */
    public $PolicyName;

    /**
     * @var array Filter by monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring). If this parameter is left empty, all will be queried by default
     */
    public $MonitorTypes;

    /**
     * @var array Filter by namespace. For the values of different policy types, please see:
[Policy Type List](https://intl.cloud.tencent.com/document/product/248/50397?from_cn_redirect=1)
     */
    public $Namespaces;

    /**
     * @var string Alarm object list. The outer array corresponds to multiple instances.
Each inner array corresponds to one instance, where `object` corresponds to the dimension information of the instance. The format is as follows:
[
	[{"name":"unInstanceId","value":"ins-qr888845g"}],
	[{"name":"unInstanceId","value":"ins-qr8d555g"}]
	...
]
For the samples for different Tencent Cloud services, please see:
[Dimension List](https://intl.cloud.tencent.com/document/product/248/50397?from_cn_redirect=1)
     */
    public $Dimensions;

    /**
     * @var array Search by recipient `uid`, which should be queried by calling the CAM API. For more information, please see:
[ListUsers](https://intl.cloud.tencent.com/document/product/598/34587?from_cn_redirect=1)
     */
    public $ReceiverUids;

    /**
     * @var array Search by recipient group `uid`, which should be queried by calling the CAM API. For more information, please see:
[ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1)
     */
    public $ReceiverGroups;

    /**
     * @var array Filter by default policy. Valid values: DEFAULT (display default policy), NOT_DEFAULT (display non-default policies). If this parameter is left empty, all policies will be displayed
     */
    public $PolicyType;

    /**
     * @var string Sort by field. For example, to sort by the last modification time, use Field: "UpdateTime".
     */
    public $Field;

    /**
     * @var string Sort order. Valid values: ASC (ascending), DESC (descending)
     */
    public $Order;

    /**
     * @var array ID array of the policy project, which can be viewed on the following page:
[Project Management](https://console.cloud.tencent.com/project)
     */
    public $ProjectIds;

    /**
     * @var array ID list of the notification template, which can be obtained by querying the notification template list.
[DescribeAlarmNotices](https://intl.cloud.tencent.com/document/product/248/51280?from_cn_redirect=1)
     */
    public $NoticeIds;

    /**
     * @var array Filter by trigger condition. Valid values: STATIC (display policies with static threshold), DYNAMIC (display policies with dynamic threshold). If this parameter is left empty, all policies will be displayed
     */
    public $RuleTypes;

    /**
     * @var array Filter by alarm status. Valid values: [1]: enabled; [0]: disabled; [0, 1]: all
     */
    public $Enable;

    /**
     * @var integer If `1` is passed in, alarm policies with no notification rules configured are queried. If it is left empty or other values are passed in, all alarm policies are queried.
     */
    public $NotBindingNoticeRule;

    /**
     * @param string $Module Value fixed at "monitor"
     * @param integer $PageNumber Page number starting from 1. Default value: 1
     * @param integer $PageSize Number of entries per page. Value range: 1–100. Default value: 20
     * @param string $PolicyName Fuzzy search by policy name
     * @param array $MonitorTypes Filter by monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring). If this parameter is left empty, all will be queried by default
     * @param array $Namespaces Filter by namespace. For the values of different policy types, please see:
[Policy Type List](https://intl.cloud.tencent.com/document/product/248/50397?from_cn_redirect=1)
     * @param string $Dimensions Alarm object list. The outer array corresponds to multiple instances.
Each inner array corresponds to one instance, where `object` corresponds to the dimension information of the instance. The format is as follows:
[
	[{"name":"unInstanceId","value":"ins-qr888845g"}],
	[{"name":"unInstanceId","value":"ins-qr8d555g"}]
	...
]
For the samples for different Tencent Cloud services, please see:
[Dimension List](https://intl.cloud.tencent.com/document/product/248/50397?from_cn_redirect=1)
     * @param array $ReceiverUids Search by recipient `uid`, which should be queried by calling the CAM API. For more information, please see:
[ListUsers](https://intl.cloud.tencent.com/document/product/598/34587?from_cn_redirect=1)
     * @param array $ReceiverGroups Search by recipient group `uid`, which should be queried by calling the CAM API. For more information, please see:
[ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1)
     * @param array $PolicyType Filter by default policy. Valid values: DEFAULT (display default policy), NOT_DEFAULT (display non-default policies). If this parameter is left empty, all policies will be displayed
     * @param string $Field Sort by field. For example, to sort by the last modification time, use Field: "UpdateTime".
     * @param string $Order Sort order. Valid values: ASC (ascending), DESC (descending)
     * @param array $ProjectIds ID array of the policy project, which can be viewed on the following page:
[Project Management](https://console.cloud.tencent.com/project)
     * @param array $NoticeIds ID list of the notification template, which can be obtained by querying the notification template list.
[DescribeAlarmNotices](https://intl.cloud.tencent.com/document/product/248/51280?from_cn_redirect=1)
     * @param array $RuleTypes Filter by trigger condition. Valid values: STATIC (display policies with static threshold), DYNAMIC (display policies with dynamic threshold). If this parameter is left empty, all policies will be displayed
     * @param array $Enable Filter by alarm status. Valid values: [1]: enabled; [0]: disabled; [0, 1]: all
     * @param integer $NotBindingNoticeRule If `1` is passed in, alarm policies with no notification rules configured are queried. If it is left empty or other values are passed in, all alarm policies are queried.
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("MonitorTypes",$param) and $param["MonitorTypes"] !== null) {
            $this->MonitorTypes = $param["MonitorTypes"];
        }

        if (array_key_exists("Namespaces",$param) and $param["Namespaces"] !== null) {
            $this->Namespaces = $param["Namespaces"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("ReceiverUids",$param) and $param["ReceiverUids"] !== null) {
            $this->ReceiverUids = $param["ReceiverUids"];
        }

        if (array_key_exists("ReceiverGroups",$param) and $param["ReceiverGroups"] !== null) {
            $this->ReceiverGroups = $param["ReceiverGroups"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("NoticeIds",$param) and $param["NoticeIds"] !== null) {
            $this->NoticeIds = $param["NoticeIds"];
        }

        if (array_key_exists("RuleTypes",$param) and $param["RuleTypes"] !== null) {
            $this->RuleTypes = $param["RuleTypes"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("NotBindingNoticeRule",$param) and $param["NotBindingNoticeRule"] !== null) {
            $this->NotBindingNoticeRule = $param["NotBindingNoticeRule"];
        }
    }
}

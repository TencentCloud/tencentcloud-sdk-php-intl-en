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
 * @method string getDimensions() Obtain The alarm object list, which is a JSON string. The outer array corresponds to multiple instances, and the inner array is the dimension of an object. For example, “CVM - Basic Monitor” can be written as:
`[ {"Dimensions": {"unInstanceId": "ins-qr8d555g"}}, {"Dimensions": {"unInstanceId": "ins-qr8d555h"}} ]`
You can also refer to the “Example 2” below.

For more information on the parameter samples of different Tencent Cloud services, see [Product Policy Type and Dimension Information](https://intl.cloud.tencent.com/document/product/248/50397?from_cn_redirect=1).

Note: If `1` is passed in for `NeedCorrespondence`, the relationship between a policy and an instance needs to be returned. You can pass in up to 20 alarm object dimensions to avoid request timeout.
 * @method void setDimensions(string $Dimensions) Set The alarm object list, which is a JSON string. The outer array corresponds to multiple instances, and the inner array is the dimension of an object. For example, “CVM - Basic Monitor” can be written as:
`[ {"Dimensions": {"unInstanceId": "ins-qr8d555g"}}, {"Dimensions": {"unInstanceId": "ins-qr8d555h"}} ]`
You can also refer to the “Example 2” below.

For more information on the parameter samples of different Tencent Cloud services, see [Product Policy Type and Dimension Information](https://intl.cloud.tencent.com/document/product/248/50397?from_cn_redirect=1).

Note: If `1` is passed in for `NeedCorrespondence`, the relationship between a policy and an instance needs to be returned. You can pass in up to 20 alarm object dimensions to avoid request timeout.
 * @method array getReceiverUids() Obtain Search by recipient. You can get the user list with the API [ListUsers](https://intl.cloud.tencent.com/document/product/598/34587?from_cn_redirect=1) in “Cloud Access Management” or query the sub-user information with the API [GetUser](https://intl.cloud.tencent.com/document/product/598/34590?from_cn_redirect=1). The `Uid` field in the returned result should be entered here.
 * @method void setReceiverUids(array $ReceiverUids) Set Search by recipient. You can get the user list with the API [ListUsers](https://intl.cloud.tencent.com/document/product/598/34587?from_cn_redirect=1) in “Cloud Access Management” or query the sub-user information with the API [GetUser](https://intl.cloud.tencent.com/document/product/598/34590?from_cn_redirect=1). The `Uid` field in the returned result should be entered here.
 * @method array getReceiverGroups() Obtain Search by recipient group. You can get the user group list with the API [ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1) in “Cloud Access Management” or query the user group list where a sub-user is in with the API [ListGroupsForUser](https://intl.cloud.tencent.com/document/product/598/34588?from_cn_redirect=1). The `GroupId` field in the returned result should be entered here.
 * @method void setReceiverGroups(array $ReceiverGroups) Set Search by recipient group. You can get the user group list with the API [ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1) in “Cloud Access Management” or query the user group list where a sub-user is in with the API [ListGroupsForUser](https://intl.cloud.tencent.com/document/product/598/34588?from_cn_redirect=1). The `GroupId` field in the returned result should be entered here.
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
 * @method array getNoticeIds() Obtain List of the notification template IDs, which can be obtained by querying the notification template list.
It can be queried with the API [DescribeAlarmNotices](https://intl.cloud.tencent.com/document/product/248/51280?from_cn_redirect=1).
 * @method void setNoticeIds(array $NoticeIds) Set List of the notification template IDs, which can be obtained by querying the notification template list.
It can be queried with the API [DescribeAlarmNotices](https://intl.cloud.tencent.com/document/product/248/51280?from_cn_redirect=1).
 * @method array getRuleTypes() Obtain Filter by trigger condition. Valid values: STATIC (display policies with static threshold), DYNAMIC (display policies with dynamic threshold). If this parameter is left empty, all policies will be displayed
 * @method void setRuleTypes(array $RuleTypes) Set Filter by trigger condition. Valid values: STATIC (display policies with static threshold), DYNAMIC (display policies with dynamic threshold). If this parameter is left empty, all policies will be displayed
 * @method array getEnable() Obtain Filter by alarm status. Valid values: [1]: enabled; [0]: disabled; [0, 1]: all
 * @method void setEnable(array $Enable) Set Filter by alarm status. Valid values: [1]: enabled; [0]: disabled; [0, 1]: all
 * @method integer getNotBindingNoticeRule() Obtain If `1` is passed in, alarm policies with no notification rules configured are queried. If it is left empty or other values are passed in, all alarm policies are queried.
 * @method void setNotBindingNoticeRule(integer $NotBindingNoticeRule) Set If `1` is passed in, alarm policies with no notification rules configured are queried. If it is left empty or other values are passed in, all alarm policies are queried.
 * @method integer getInstanceGroupId() Obtain Instance group ID.
 * @method void setInstanceGroupId(integer $InstanceGroupId) Set Instance group ID.
 * @method integer getNeedCorrespondence() Obtain Whether the relationship between a policy and the input parameter filter dimension is required. `1`: Yes. `0`: No. Default value: `0`.
 * @method void setNeedCorrespondence(integer $NeedCorrespondence) Set Whether the relationship between a policy and the input parameter filter dimension is required. `1`: Yes. `0`: No. Default value: `0`.
 * @method array getTriggerTasks() Obtain Filter alarm policy by triggered task (such as auto scaling task). Up to 10 tasks can be specified.
 * @method void setTriggerTasks(array $TriggerTasks) Set Filter alarm policy by triggered task (such as auto scaling task). Up to 10 tasks can be specified.
 * @method array getOneClickPolicyType() Obtain Filter by quick alarm policy. If this parameter is left empty, all policies are displayed. `ONECLICK`: Display quick alarm policies; `NOT_ONECLICK`: Display non-quick alarm policies.
 * @method void setOneClickPolicyType(array $OneClickPolicyType) Set Filter by quick alarm policy. If this parameter is left empty, all policies are displayed. `ONECLICK`: Display quick alarm policies; `NOT_ONECLICK`: Display non-quick alarm policies.
 * @method integer getNotBindAll() Obtain Whether the returned result needs to filter policies associated with all objects. Valid values: `1` (Yes), `0` (No).
 * @method void setNotBindAll(integer $NotBindAll) Set Whether the returned result needs to filter policies associated with all objects. Valid values: `1` (Yes), `0` (No).
 * @method integer getNotInstanceGroup() Obtain Whether the returned result needs to filter policies associated with instance groups. Valid values: `1` (Yes), `0` (No).
 * @method void setNotInstanceGroup(integer $NotInstanceGroup) Set Whether the returned result needs to filter policies associated with instance groups. Valid values: `1` (Yes), `0` (No).
 * @method array getTags() Obtain Filter policies by tag
 * @method void setTags(array $Tags) Set Filter policies by tag
 * @method string getPromInsId() Obtain ID of the TencentCloud Managed Service for Prometheus instance, which is used for customizing a metric policy.
 * @method void setPromInsId(string $PromInsId) Set ID of the TencentCloud Managed Service for Prometheus instance, which is used for customizing a metric policy.
 * @method array getReceiverOnCallFormIDs() Obtain Search by schedule
 * @method void setReceiverOnCallFormIDs(array $ReceiverOnCallFormIDs) Set Search by schedule
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
     * @var string The alarm object list, which is a JSON string. The outer array corresponds to multiple instances, and the inner array is the dimension of an object. For example, “CVM - Basic Monitor” can be written as:
`[ {"Dimensions": {"unInstanceId": "ins-qr8d555g"}}, {"Dimensions": {"unInstanceId": "ins-qr8d555h"}} ]`
You can also refer to the “Example 2” below.

For more information on the parameter samples of different Tencent Cloud services, see [Product Policy Type and Dimension Information](https://intl.cloud.tencent.com/document/product/248/50397?from_cn_redirect=1).

Note: If `1` is passed in for `NeedCorrespondence`, the relationship between a policy and an instance needs to be returned. You can pass in up to 20 alarm object dimensions to avoid request timeout.
     */
    public $Dimensions;

    /**
     * @var array Search by recipient. You can get the user list with the API [ListUsers](https://intl.cloud.tencent.com/document/product/598/34587?from_cn_redirect=1) in “Cloud Access Management” or query the sub-user information with the API [GetUser](https://intl.cloud.tencent.com/document/product/598/34590?from_cn_redirect=1). The `Uid` field in the returned result should be entered here.
     */
    public $ReceiverUids;

    /**
     * @var array Search by recipient group. You can get the user group list with the API [ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1) in “Cloud Access Management” or query the user group list where a sub-user is in with the API [ListGroupsForUser](https://intl.cloud.tencent.com/document/product/598/34588?from_cn_redirect=1). The `GroupId` field in the returned result should be entered here.
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
     * @var array List of the notification template IDs, which can be obtained by querying the notification template list.
It can be queried with the API [DescribeAlarmNotices](https://intl.cloud.tencent.com/document/product/248/51280?from_cn_redirect=1).
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
     * @var integer Instance group ID.
     */
    public $InstanceGroupId;

    /**
     * @var integer Whether the relationship between a policy and the input parameter filter dimension is required. `1`: Yes. `0`: No. Default value: `0`.
     */
    public $NeedCorrespondence;

    /**
     * @var array Filter alarm policy by triggered task (such as auto scaling task). Up to 10 tasks can be specified.
     */
    public $TriggerTasks;

    /**
     * @var array Filter by quick alarm policy. If this parameter is left empty, all policies are displayed. `ONECLICK`: Display quick alarm policies; `NOT_ONECLICK`: Display non-quick alarm policies.
     */
    public $OneClickPolicyType;

    /**
     * @var integer Whether the returned result needs to filter policies associated with all objects. Valid values: `1` (Yes), `0` (No).
     */
    public $NotBindAll;

    /**
     * @var integer Whether the returned result needs to filter policies associated with instance groups. Valid values: `1` (Yes), `0` (No).
     */
    public $NotInstanceGroup;

    /**
     * @var array Filter policies by tag
     */
    public $Tags;

    /**
     * @var string ID of the TencentCloud Managed Service for Prometheus instance, which is used for customizing a metric policy.
     */
    public $PromInsId;

    /**
     * @var array Search by schedule
     */
    public $ReceiverOnCallFormIDs;

    /**
     * @param string $Module Value fixed at "monitor"
     * @param integer $PageNumber Page number starting from 1. Default value: 1
     * @param integer $PageSize Number of entries per page. Value range: 1–100. Default value: 20
     * @param string $PolicyName Fuzzy search by policy name
     * @param array $MonitorTypes Filter by monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring). If this parameter is left empty, all will be queried by default
     * @param array $Namespaces Filter by namespace. For the values of different policy types, please see:
[Policy Type List](https://intl.cloud.tencent.com/document/product/248/50397?from_cn_redirect=1)
     * @param string $Dimensions The alarm object list, which is a JSON string. The outer array corresponds to multiple instances, and the inner array is the dimension of an object. For example, “CVM - Basic Monitor” can be written as:
`[ {"Dimensions": {"unInstanceId": "ins-qr8d555g"}}, {"Dimensions": {"unInstanceId": "ins-qr8d555h"}} ]`
You can also refer to the “Example 2” below.

For more information on the parameter samples of different Tencent Cloud services, see [Product Policy Type and Dimension Information](https://intl.cloud.tencent.com/document/product/248/50397?from_cn_redirect=1).

Note: If `1` is passed in for `NeedCorrespondence`, the relationship between a policy and an instance needs to be returned. You can pass in up to 20 alarm object dimensions to avoid request timeout.
     * @param array $ReceiverUids Search by recipient. You can get the user list with the API [ListUsers](https://intl.cloud.tencent.com/document/product/598/34587?from_cn_redirect=1) in “Cloud Access Management” or query the sub-user information with the API [GetUser](https://intl.cloud.tencent.com/document/product/598/34590?from_cn_redirect=1). The `Uid` field in the returned result should be entered here.
     * @param array $ReceiverGroups Search by recipient group. You can get the user group list with the API [ListGroups](https://intl.cloud.tencent.com/document/product/598/34589?from_cn_redirect=1) in “Cloud Access Management” or query the user group list where a sub-user is in with the API [ListGroupsForUser](https://intl.cloud.tencent.com/document/product/598/34588?from_cn_redirect=1). The `GroupId` field in the returned result should be entered here.
     * @param array $PolicyType Filter by default policy. Valid values: DEFAULT (display default policy), NOT_DEFAULT (display non-default policies). If this parameter is left empty, all policies will be displayed
     * @param string $Field Sort by field. For example, to sort by the last modification time, use Field: "UpdateTime".
     * @param string $Order Sort order. Valid values: ASC (ascending), DESC (descending)
     * @param array $ProjectIds ID array of the policy project, which can be viewed on the following page:
[Project Management](https://console.cloud.tencent.com/project)
     * @param array $NoticeIds List of the notification template IDs, which can be obtained by querying the notification template list.
It can be queried with the API [DescribeAlarmNotices](https://intl.cloud.tencent.com/document/product/248/51280?from_cn_redirect=1).
     * @param array $RuleTypes Filter by trigger condition. Valid values: STATIC (display policies with static threshold), DYNAMIC (display policies with dynamic threshold). If this parameter is left empty, all policies will be displayed
     * @param array $Enable Filter by alarm status. Valid values: [1]: enabled; [0]: disabled; [0, 1]: all
     * @param integer $NotBindingNoticeRule If `1` is passed in, alarm policies with no notification rules configured are queried. If it is left empty or other values are passed in, all alarm policies are queried.
     * @param integer $InstanceGroupId Instance group ID.
     * @param integer $NeedCorrespondence Whether the relationship between a policy and the input parameter filter dimension is required. `1`: Yes. `0`: No. Default value: `0`.
     * @param array $TriggerTasks Filter alarm policy by triggered task (such as auto scaling task). Up to 10 tasks can be specified.
     * @param array $OneClickPolicyType Filter by quick alarm policy. If this parameter is left empty, all policies are displayed. `ONECLICK`: Display quick alarm policies; `NOT_ONECLICK`: Display non-quick alarm policies.
     * @param integer $NotBindAll Whether the returned result needs to filter policies associated with all objects. Valid values: `1` (Yes), `0` (No).
     * @param integer $NotInstanceGroup Whether the returned result needs to filter policies associated with instance groups. Valid values: `1` (Yes), `0` (No).
     * @param array $Tags Filter policies by tag
     * @param string $PromInsId ID of the TencentCloud Managed Service for Prometheus instance, which is used for customizing a metric policy.
     * @param array $ReceiverOnCallFormIDs Search by schedule
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

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("NeedCorrespondence",$param) and $param["NeedCorrespondence"] !== null) {
            $this->NeedCorrespondence = $param["NeedCorrespondence"];
        }

        if (array_key_exists("TriggerTasks",$param) and $param["TriggerTasks"] !== null) {
            $this->TriggerTasks = [];
            foreach ($param["TriggerTasks"] as $key => $value){
                $obj = new AlarmPolicyTriggerTask();
                $obj->deserialize($value);
                array_push($this->TriggerTasks, $obj);
            }
        }

        if (array_key_exists("OneClickPolicyType",$param) and $param["OneClickPolicyType"] !== null) {
            $this->OneClickPolicyType = $param["OneClickPolicyType"];
        }

        if (array_key_exists("NotBindAll",$param) and $param["NotBindAll"] !== null) {
            $this->NotBindAll = $param["NotBindAll"];
        }

        if (array_key_exists("NotInstanceGroup",$param) and $param["NotInstanceGroup"] !== null) {
            $this->NotInstanceGroup = $param["NotInstanceGroup"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PromInsId",$param) and $param["PromInsId"] !== null) {
            $this->PromInsId = $param["PromInsId"];
        }

        if (array_key_exists("ReceiverOnCallFormIDs",$param) and $param["ReceiverOnCallFormIDs"] !== null) {
            $this->ReceiverOnCallFormIDs = $param["ReceiverOnCallFormIDs"];
        }
    }
}

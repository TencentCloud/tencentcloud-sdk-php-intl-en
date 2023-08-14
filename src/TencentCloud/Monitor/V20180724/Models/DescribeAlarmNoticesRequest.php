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
 * DescribeAlarmNotices request structure.
 *
 * @method string getModule() Obtain Module name. Enter "monitor" here
 * @method void setModule(string $Module) Set Module name. Enter "monitor" here
 * @method integer getPageNumber() Obtain Page number. Minimum value: 1
 * @method void setPageNumber(integer $PageNumber) Set Page number. Minimum value: 1
 * @method integer getPageSize() Obtain Number of entries per page. Value range: 1–200
 * @method void setPageSize(integer $PageSize) Set Number of entries per page. Value range: 1–200
 * @method string getOrder() Obtain Sort by update time. Valid values: ASC (ascending), DESC (descending)
 * @method void setOrder(string $Order) Set Sort by update time. Valid values: ASC (ascending), DESC (descending)
 * @method integer getOwnerUid() Obtain Root account `uid`, which is used to create preset notifications
 * @method void setOwnerUid(integer $OwnerUid) Set Root account `uid`, which is used to create preset notifications
 * @method string getName() Obtain Alarm notification template name, which is used for fuzzy search
 * @method void setName(string $Name) Set Alarm notification template name, which is used for fuzzy search
 * @method string getReceiverType() Obtain Filter by recipient. The type of notified users should be selected for the alarm notification template. Valid values: USER (user), GROUP (user group). If this parameter is left empty, no filter by recipient will be performed
 * @method void setReceiverType(string $ReceiverType) Set Filter by recipient. The type of notified users should be selected for the alarm notification template. Valid values: USER (user), GROUP (user group). If this parameter is left empty, no filter by recipient will be performed
 * @method array getUserIds() Obtain Recipient object list
 * @method void setUserIds(array $UserIds) Set Recipient object list
 * @method array getGroupIds() Obtain Recipient group list
 * @method void setGroupIds(array $GroupIds) Set Recipient group list
 * @method array getNoticeIds() Obtain Filter by notification template ID. If an empty array is passed in or if this parameter is left empty, the filter operation will not be performed.
 * @method void setNoticeIds(array $NoticeIds) Set Filter by notification template ID. If an empty array is passed in or if this parameter is left empty, the filter operation will not be performed.
 * @method array getTags() Obtain Filter templates by tag
 * @method void setTags(array $Tags) Set Filter templates by tag
 * @method array getOnCallFormIDs() Obtain Schedule list
 * @method void setOnCallFormIDs(array $OnCallFormIDs) Set Schedule list
 */
class DescribeAlarmNoticesRequest extends AbstractModel
{
    /**
     * @var string Module name. Enter "monitor" here
     */
    public $Module;

    /**
     * @var integer Page number. Minimum value: 1
     */
    public $PageNumber;

    /**
     * @var integer Number of entries per page. Value range: 1–200
     */
    public $PageSize;

    /**
     * @var string Sort by update time. Valid values: ASC (ascending), DESC (descending)
     */
    public $Order;

    /**
     * @var integer Root account `uid`, which is used to create preset notifications
     */
    public $OwnerUid;

    /**
     * @var string Alarm notification template name, which is used for fuzzy search
     */
    public $Name;

    /**
     * @var string Filter by recipient. The type of notified users should be selected for the alarm notification template. Valid values: USER (user), GROUP (user group). If this parameter is left empty, no filter by recipient will be performed
     */
    public $ReceiverType;

    /**
     * @var array Recipient object list
     */
    public $UserIds;

    /**
     * @var array Recipient group list
     */
    public $GroupIds;

    /**
     * @var array Filter by notification template ID. If an empty array is passed in or if this parameter is left empty, the filter operation will not be performed.
     */
    public $NoticeIds;

    /**
     * @var array Filter templates by tag
     */
    public $Tags;

    /**
     * @var array Schedule list
     */
    public $OnCallFormIDs;

    /**
     * @param string $Module Module name. Enter "monitor" here
     * @param integer $PageNumber Page number. Minimum value: 1
     * @param integer $PageSize Number of entries per page. Value range: 1–200
     * @param string $Order Sort by update time. Valid values: ASC (ascending), DESC (descending)
     * @param integer $OwnerUid Root account `uid`, which is used to create preset notifications
     * @param string $Name Alarm notification template name, which is used for fuzzy search
     * @param string $ReceiverType Filter by recipient. The type of notified users should be selected for the alarm notification template. Valid values: USER (user), GROUP (user group). If this parameter is left empty, no filter by recipient will be performed
     * @param array $UserIds Recipient object list
     * @param array $GroupIds Recipient group list
     * @param array $NoticeIds Filter by notification template ID. If an empty array is passed in or if this parameter is left empty, the filter operation will not be performed.
     * @param array $Tags Filter templates by tag
     * @param array $OnCallFormIDs Schedule list
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OwnerUid",$param) and $param["OwnerUid"] !== null) {
            $this->OwnerUid = $param["OwnerUid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("NoticeIds",$param) and $param["NoticeIds"] !== null) {
            $this->NoticeIds = $param["NoticeIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("OnCallFormIDs",$param) and $param["OnCallFormIDs"] !== null) {
            $this->OnCallFormIDs = $param["OnCallFormIDs"];
        }
    }
}

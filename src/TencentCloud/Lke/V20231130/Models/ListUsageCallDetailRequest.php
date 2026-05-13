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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUsageCallDetail request structure.
 *
 * @method string getModelName() Obtain Model identifier.
 * @method void setModelName(string $ModelName) Set Model identifier.
 * @method integer getPageNumber() Obtain Page number.
 * @method void setPageNumber(integer $PageNumber) Set Page number.
 * @method integer getPageSize() Obtain Number of items per page.
 * @method void setPageSize(integer $PageSize) Set Number of items per page.
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method array getUinAccount() Obtain Uin list.
 * @method void setUinAccount(array $UinAccount) Set Uin list.
 * @method array getAppBizIds() Obtain Application ID list.
 * @method void setAppBizIds(array $AppBizIds) Set Application ID list.
 * @method string getCallType() Obtain Call type list.
 * @method void setCallType(string $CallType) Set Call type list.
 * @method array getSubScenes() Obtain Filter sub-scenario.
 * @method void setSubScenes(array $SubScenes) Set Filter sub-scenario.
 * @method string getAppType() Obtain Application Type (knowledge_qa: Knowledge Q&A Application Management, shared_knowledge: Shared Knowledge Base)
 * @method void setAppType(string $AppType) Set Application Type (knowledge_qa: Knowledge Q&A Application Management, shared_knowledge: Shared Knowledge Base)
 * @method string getBillingTag() Obtain Custom tag corresponding to bill details
 * @method void setBillingTag(string $BillingTag) Set Custom tag corresponding to bill details
 * @method string getSpaceId() Obtain Space ID
 * @method void setSpaceId(string $SpaceId) Set Space ID
 * @method integer getStatStartTime() Obtain Start timestamp, unit: seconds
 * @method void setStatStartTime(integer $StatStartTime) Set Start timestamp, unit: seconds
 * @method integer getStatEndTime() Obtain Start timestamp, unit: seconds
 * @method void setStatEndTime(integer $StatEndTime) Set Start timestamp, unit: seconds
 */
class ListUsageCallDetailRequest extends AbstractModel
{
    /**
     * @var string Model identifier.
     */
    public $ModelName;

    /**
     * @var integer Page number.
     */
    public $PageNumber;

    /**
     * @var integer Number of items per page.
     */
    public $PageSize;

    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var array Uin list.
     */
    public $UinAccount;

    /**
     * @var array Application ID list.
     */
    public $AppBizIds;

    /**
     * @var string Call type list.
     */
    public $CallType;

    /**
     * @var array Filter sub-scenario.
     */
    public $SubScenes;

    /**
     * @var string Application Type (knowledge_qa: Knowledge Q&A Application Management, shared_knowledge: Shared Knowledge Base)
     */
    public $AppType;

    /**
     * @var string Custom tag corresponding to bill details
     */
    public $BillingTag;

    /**
     * @var string Space ID
     */
    public $SpaceId;

    /**
     * @var integer Start timestamp, unit: seconds
     */
    public $StatStartTime;

    /**
     * @var integer Start timestamp, unit: seconds
     */
    public $StatEndTime;

    /**
     * @param string $ModelName Model identifier.
     * @param integer $PageNumber Page number.
     * @param integer $PageSize Number of items per page.
     * @param string $StartTime Start time.
     * @param string $EndTime End time.
     * @param array $UinAccount Uin list.
     * @param array $AppBizIds Application ID list.
     * @param string $CallType Call type list.
     * @param array $SubScenes Filter sub-scenario.
     * @param string $AppType Application Type (knowledge_qa: Knowledge Q&A Application Management, shared_knowledge: Shared Knowledge Base)
     * @param string $BillingTag Custom tag corresponding to bill details
     * @param string $SpaceId Space ID
     * @param integer $StatStartTime Start timestamp, unit: seconds
     * @param integer $StatEndTime Start timestamp, unit: seconds
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("UinAccount",$param) and $param["UinAccount"] !== null) {
            $this->UinAccount = $param["UinAccount"];
        }

        if (array_key_exists("AppBizIds",$param) and $param["AppBizIds"] !== null) {
            $this->AppBizIds = $param["AppBizIds"];
        }

        if (array_key_exists("CallType",$param) and $param["CallType"] !== null) {
            $this->CallType = $param["CallType"];
        }

        if (array_key_exists("SubScenes",$param) and $param["SubScenes"] !== null) {
            $this->SubScenes = $param["SubScenes"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("BillingTag",$param) and $param["BillingTag"] !== null) {
            $this->BillingTag = $param["BillingTag"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("StatStartTime",$param) and $param["StatStartTime"] !== null) {
            $this->StatStartTime = $param["StatStartTime"];
        }

        if (array_key_exists("StatEndTime",$param) and $param["StatEndTime"] !== null) {
            $this->StatEndTime = $param["StatEndTime"];
        }
    }
}

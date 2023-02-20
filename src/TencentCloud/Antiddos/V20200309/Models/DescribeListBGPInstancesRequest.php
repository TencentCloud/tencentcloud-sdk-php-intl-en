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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeListBGPInstances request structure.
 *
 * @method integer getOffset() Obtain Starting offset of the page. Value: (number of pages – 1) * items per page.
 * @method void setOffset(integer $Offset) Set Starting offset of the page. Value: (number of pages – 1) * items per page.
 * @method integer getLimit() Obtain Number of items per page. The default value is 20 when `Limit = 0`. The maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of items per page. The default value is 20 when `Limit = 0`. The maximum value is 100.
 * @method string getFilterIp() Obtain Filters by IP.
 * @method void setFilterIp(string $FilterIp) Set Filters by IP.
 * @method string getFilterInstanceId() Obtain Anti-DDoS instance ID filter. For example, `bgp-00000001`.
 * @method void setFilterInstanceId(string $FilterInstanceId) Set Anti-DDoS instance ID filter. For example, `bgp-00000001`.
 * @method string getFilterRegion() Obtain Filters by region. For example, `ap-guangzhou`.
 * @method void setFilterRegion(string $FilterRegion) Set Filters by region. For example, `ap-guangzhou`.
 * @method string getFilterName() Obtain Filters by name.
 * @method void setFilterName(string $FilterName) Set Filters by name.
 * @method integer getFilterLine() Obtain Line filter. Valid values: 1: BGP; 2: Non-BGP.
 * @method void setFilterLine(integer $FilterLine) Set Line filter. Valid values: 1: BGP; 2: Non-BGP.
 * @method string getFilterStatus() Obtain Filters by instance status. `idle`: Running; `attacking`: Being attacked; `blocking`: Being blocked.
 * @method void setFilterStatus(string $FilterStatus) Set Filters by instance status. `idle`: Running; `attacking`: Being attacked; `blocking`: Being blocked.
 * @method string getFilterBoundStatus() Obtain Filters by binding status. `bounding`: The instance is bound; `failed`: The binding failed.
 * @method void setFilterBoundStatus(string $FilterBoundStatus) Set Filters by binding status. `bounding`: The instance is bound; `failed`: The binding failed.
 * @method array getFilterInstanceIdList() Obtain Array of instance IDs
 * @method void setFilterInstanceIdList(array $FilterInstanceIdList) Set Array of instance IDs
 * @method integer getFilterEnterpriseFlag() Obtain Enterprise edition. Values: `1` (the Convoy package included), `2` (the Convoy package not included)
 * @method void setFilterEnterpriseFlag(integer $FilterEnterpriseFlag) Set Enterprise edition. Values: `1` (the Convoy package included), `2` (the Convoy package not included)
 * @method integer getFilterLightFlag() Obtain Whether it’s a Lighthouse edition
 * @method void setFilterLightFlag(integer $FilterLightFlag) Set Whether it’s a Lighthouse edition
 * @method integer getFilterChannelFlag() Obtain Whether it’s a Channel edition
 * @method void setFilterChannelFlag(integer $FilterChannelFlag) Set Whether it’s a Channel edition
 * @method TagFilter getFilterTag() Obtain Filters by tag
 * @method void setFilterTag(TagFilter $FilterTag) Set Filters by tag
 * @method integer getFilterTrialFlag() Obtain Filters out trial instances. Values: `1` (emergency protection instances), `2` (PLG instances)
 * @method void setFilterTrialFlag(integer $FilterTrialFlag) Set Filters out trial instances. Values: `1` (emergency protection instances), `2` (PLG instances)
 * @method integer getFilterConvoy() Obtain Filters out Convoy instances
 * @method void setFilterConvoy(integer $FilterConvoy) Set Filters out Convoy instances
 * @method boolean getExcludeAdvancedInfo() Obtain Whether to exclude the advanced information (such as `InstanceList[0].Usage`). Values: `true` (exclude), `false` (do not exclude). The default value is `false`.
 * @method void setExcludeAdvancedInfo(boolean $ExcludeAdvancedInfo) Set Whether to exclude the advanced information (such as `InstanceList[0].Usage`). Values: `true` (exclude), `false` (do not exclude). The default value is `false`.
 */
class DescribeListBGPInstancesRequest extends AbstractModel
{
    /**
     * @var integer Starting offset of the page. Value: (number of pages – 1) * items per page.
     */
    public $Offset;

    /**
     * @var integer Number of items per page. The default value is 20 when `Limit = 0`. The maximum value is 100.
     */
    public $Limit;

    /**
     * @var string Filters by IP.
     */
    public $FilterIp;

    /**
     * @var string Anti-DDoS instance ID filter. For example, `bgp-00000001`.
     */
    public $FilterInstanceId;

    /**
     * @var string Filters by region. For example, `ap-guangzhou`.
     */
    public $FilterRegion;

    /**
     * @var string Filters by name.
     */
    public $FilterName;

    /**
     * @var integer Line filter. Valid values: 1: BGP; 2: Non-BGP.
     */
    public $FilterLine;

    /**
     * @var string Filters by instance status. `idle`: Running; `attacking`: Being attacked; `blocking`: Being blocked.
     */
    public $FilterStatus;

    /**
     * @var string Filters by binding status. `bounding`: The instance is bound; `failed`: The binding failed.
     */
    public $FilterBoundStatus;

    /**
     * @var array Array of instance IDs
     */
    public $FilterInstanceIdList;

    /**
     * @var integer Enterprise edition. Values: `1` (the Convoy package included), `2` (the Convoy package not included)
     */
    public $FilterEnterpriseFlag;

    /**
     * @var integer Whether it’s a Lighthouse edition
     */
    public $FilterLightFlag;

    /**
     * @var integer Whether it’s a Channel edition
     */
    public $FilterChannelFlag;

    /**
     * @var TagFilter Filters by tag
     */
    public $FilterTag;

    /**
     * @var integer Filters out trial instances. Values: `1` (emergency protection instances), `2` (PLG instances)
     */
    public $FilterTrialFlag;

    /**
     * @var integer Filters out Convoy instances
     */
    public $FilterConvoy;

    /**
     * @var boolean Whether to exclude the advanced information (such as `InstanceList[0].Usage`). Values: `true` (exclude), `false` (do not exclude). The default value is `false`.
     */
    public $ExcludeAdvancedInfo;

    /**
     * @param integer $Offset Starting offset of the page. Value: (number of pages – 1) * items per page.
     * @param integer $Limit Number of items per page. The default value is 20 when `Limit = 0`. The maximum value is 100.
     * @param string $FilterIp Filters by IP.
     * @param string $FilterInstanceId Anti-DDoS instance ID filter. For example, `bgp-00000001`.
     * @param string $FilterRegion Filters by region. For example, `ap-guangzhou`.
     * @param string $FilterName Filters by name.
     * @param integer $FilterLine Line filter. Valid values: 1: BGP; 2: Non-BGP.
     * @param string $FilterStatus Filters by instance status. `idle`: Running; `attacking`: Being attacked; `blocking`: Being blocked.
     * @param string $FilterBoundStatus Filters by binding status. `bounding`: The instance is bound; `failed`: The binding failed.
     * @param array $FilterInstanceIdList Array of instance IDs
     * @param integer $FilterEnterpriseFlag Enterprise edition. Values: `1` (the Convoy package included), `2` (the Convoy package not included)
     * @param integer $FilterLightFlag Whether it’s a Lighthouse edition
     * @param integer $FilterChannelFlag Whether it’s a Channel edition
     * @param TagFilter $FilterTag Filters by tag
     * @param integer $FilterTrialFlag Filters out trial instances. Values: `1` (emergency protection instances), `2` (PLG instances)
     * @param integer $FilterConvoy Filters out Convoy instances
     * @param boolean $ExcludeAdvancedInfo Whether to exclude the advanced information (such as `InstanceList[0].Usage`). Values: `true` (exclude), `false` (do not exclude). The default value is `false`.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FilterIp",$param) and $param["FilterIp"] !== null) {
            $this->FilterIp = $param["FilterIp"];
        }

        if (array_key_exists("FilterInstanceId",$param) and $param["FilterInstanceId"] !== null) {
            $this->FilterInstanceId = $param["FilterInstanceId"];
        }

        if (array_key_exists("FilterRegion",$param) and $param["FilterRegion"] !== null) {
            $this->FilterRegion = $param["FilterRegion"];
        }

        if (array_key_exists("FilterName",$param) and $param["FilterName"] !== null) {
            $this->FilterName = $param["FilterName"];
        }

        if (array_key_exists("FilterLine",$param) and $param["FilterLine"] !== null) {
            $this->FilterLine = $param["FilterLine"];
        }

        if (array_key_exists("FilterStatus",$param) and $param["FilterStatus"] !== null) {
            $this->FilterStatus = $param["FilterStatus"];
        }

        if (array_key_exists("FilterBoundStatus",$param) and $param["FilterBoundStatus"] !== null) {
            $this->FilterBoundStatus = $param["FilterBoundStatus"];
        }

        if (array_key_exists("FilterInstanceIdList",$param) and $param["FilterInstanceIdList"] !== null) {
            $this->FilterInstanceIdList = $param["FilterInstanceIdList"];
        }

        if (array_key_exists("FilterEnterpriseFlag",$param) and $param["FilterEnterpriseFlag"] !== null) {
            $this->FilterEnterpriseFlag = $param["FilterEnterpriseFlag"];
        }

        if (array_key_exists("FilterLightFlag",$param) and $param["FilterLightFlag"] !== null) {
            $this->FilterLightFlag = $param["FilterLightFlag"];
        }

        if (array_key_exists("FilterChannelFlag",$param) and $param["FilterChannelFlag"] !== null) {
            $this->FilterChannelFlag = $param["FilterChannelFlag"];
        }

        if (array_key_exists("FilterTag",$param) and $param["FilterTag"] !== null) {
            $this->FilterTag = new TagFilter();
            $this->FilterTag->deserialize($param["FilterTag"]);
        }

        if (array_key_exists("FilterTrialFlag",$param) and $param["FilterTrialFlag"] !== null) {
            $this->FilterTrialFlag = $param["FilterTrialFlag"];
        }

        if (array_key_exists("FilterConvoy",$param) and $param["FilterConvoy"] !== null) {
            $this->FilterConvoy = $param["FilterConvoy"];
        }

        if (array_key_exists("ExcludeAdvancedInfo",$param) and $param["ExcludeAdvancedInfo"] !== null) {
            $this->ExcludeAdvancedInfo = $param["ExcludeAdvancedInfo"];
        }
    }
}

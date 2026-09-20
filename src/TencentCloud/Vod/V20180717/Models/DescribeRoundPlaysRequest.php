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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoundPlays request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), they must fill in this field with the app ID.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), they must fill in this field with the app ID.</b></p>
 * @method array getRoundPlayIds() Obtain <p>Filter criteria: carousel playlist identifiers. The array can contain up to 100 identifiers.</p>
 * @method void setRoundPlayIds(array $RoundPlayIds) Set <p>Filter criteria: carousel playlist identifiers. The array can contain up to 100 identifiers.</p>
 * @method string getStatus() Obtain <p>Filter criteria, carousel playlist status. Available values: <li>Enabled: Running state;</li> <li>Disabled: Stopped.</li></p>
 * @method void setStatus(string $Status) Set <p>Filter criteria, carousel playlist status. Available values: <li>Enabled: Running state;</li> <li>Disabled: Stopped.</li></p>
 * @method TimeRange getCreateTime() Obtain <p>Filter criteria: Carousel Playlist Creation Time.</p>
 * @method void setCreateTime(TimeRange $CreateTime) Set <p>Filter criteria: Carousel Playlist Creation Time.</p>
 * @method TimeRange getUpdateTime() Obtain <p>Filter criteria: carousel playlist update time.</p>
 * @method void setUpdateTime(TimeRange $UpdateTime) Set <p>Filter criteria: carousel playlist update time.</p>
 * @method string getScrollToken() Obtain <p>Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.</p>
 * @method void setScrollToken(string $ScrollToken) Set <p>Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.</p>
 * @method integer getOffset() Obtain <p>Paging offset. Default value: 0. Deprecated. Perform batch query according to the ScrollToken parameter.</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset. Default value: 0. Deprecated. Perform batch query according to the ScrollToken parameter.</p>
 * @method integer getLimit() Obtain <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
 */
class DescribeRoundPlaysRequest extends AbstractModel
{
    /**
     * @var integer <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), they must fill in this field with the app ID.</b></p>
     */
    public $SubAppId;

    /**
     * @var array <p>Filter criteria: carousel playlist identifiers. The array can contain up to 100 identifiers.</p>
     */
    public $RoundPlayIds;

    /**
     * @var string <p>Filter criteria, carousel playlist status. Available values: <li>Enabled: Running state;</li> <li>Disabled: Stopped.</li></p>
     */
    public $Status;

    /**
     * @var TimeRange <p>Filter criteria: Carousel Playlist Creation Time.</p>
     */
    public $CreateTime;

    /**
     * @var TimeRange <p>Filter criteria: carousel playlist update time.</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.</p>
     */
    public $ScrollToken;

    /**
     * @var integer <p>Paging offset. Default value: 0. Deprecated. Perform batch query according to the ScrollToken parameter.</p>
     * @deprecated
     */
    public $Offset;

    /**
     * @var integer <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @param integer $SubAppId <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, if they access resources in on-demand applications (whether the default application or a newly created application), they must fill in this field with the app ID.</b></p>
     * @param array $RoundPlayIds <p>Filter criteria: carousel playlist identifiers. The array can contain up to 100 identifiers.</p>
     * @param string $Status <p>Filter criteria, carousel playlist status. Available values: <li>Enabled: Running state;</li> <li>Disabled: Stopped.</li></p>
     * @param TimeRange $CreateTime <p>Filter criteria: Carousel Playlist Creation Time.</p>
     * @param TimeRange $UpdateTime <p>Filter criteria: carousel playlist update time.</p>
     * @param string $ScrollToken <p>Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.</p>
     * @param integer $Offset <p>Paging offset. Default value: 0. Deprecated. Perform batch query according to the ScrollToken parameter.</p>
     * @param integer $Limit <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("RoundPlayIds",$param) and $param["RoundPlayIds"] !== null) {
            $this->RoundPlayIds = $param["RoundPlayIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = new TimeRange();
            $this->CreateTime->deserialize($param["CreateTime"]);
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = new TimeRange();
            $this->UpdateTime->deserialize($param["UpdateTime"]);
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

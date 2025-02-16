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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoundPlays request structure.
 *
 * @method integer getSubAppId() Obtain <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id. starting from december 25, 2023, if you want to access resources in the vod application (whether it is the default application or a newly created application), you must enter the application id in this field.</b>.
 * @method void setSubAppId(integer $SubAppId) Set <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id. starting from december 25, 2023, if you want to access resources in the vod application (whether it is the default application or a newly created application), you must enter the application id in this field.</b>.
 * @method array getRoundPlayIds() Obtain Filter criteria: playlist identifier, array length limit: 100.
 * @method void setRoundPlayIds(array $RoundPlayIds) Set Filter criteria: playlist identifier, array length limit: 100.
 * @method string getStatus() Obtain Filter criteria: playlist status, optional values: <li>enabled: startup status;</li> <li>disabled: stopped status.</li>.
 * @method void setStatus(string $Status) Set Filter criteria: playlist status, optional values: <li>enabled: startup status;</li> <li>disabled: stopped status.</li>.
 * @method TimeRange getCreateTime() Obtain Filter criteria: playlist creation time.
 * @method void setCreateTime(TimeRange $CreateTime) Set Filter criteria: playlist creation time.
 * @method TimeRange getUpdateTime() Obtain Filter criteria: playlist update time.
 * @method void setUpdateTime(TimeRange $UpdateTime) Set Filter criteria: playlist update time.
 * @method string getScrollToken() Obtain Scrolling identifier which is used for pulling in batches. if a single request cannot pull all the data entries, the API will return `scrolltoken`, and if the next request carries it, the next pull will start from the next entry.
 * @method void setScrollToken(string $ScrollToken) Set Scrolling identifier which is used for pulling in batches. if a single request cannot pull all the data entries, the API will return `scrolltoken`, and if the next request carries it, the next pull will start from the next entry.
 * @method integer getOffset() Obtain Pagination offset, default value: 0. this field is obsolete. please use the `scrolltoken` parameter for batch queries.
 * @method void setOffset(integer $Offset) Set Pagination offset, default value: 0. this field is obsolete. please use the `scrolltoken` parameter for batch queries.
 * @method integer getLimit() Obtain Number of returned entries. default value: 10. maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned entries. default value: 10. maximum value: 100.
 */
class DescribeRoundPlaysRequest extends AbstractModel
{
    /**
     * @var integer <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id. starting from december 25, 2023, if you want to access resources in the vod application (whether it is the default application or a newly created application), you must enter the application id in this field.</b>.
     */
    public $SubAppId;

    /**
     * @var array Filter criteria: playlist identifier, array length limit: 100.
     */
    public $RoundPlayIds;

    /**
     * @var string Filter criteria: playlist status, optional values: <li>enabled: startup status;</li> <li>disabled: stopped status.</li>.
     */
    public $Status;

    /**
     * @var TimeRange Filter criteria: playlist creation time.
     */
    public $CreateTime;

    /**
     * @var TimeRange Filter criteria: playlist update time.
     */
    public $UpdateTime;

    /**
     * @var string Scrolling identifier which is used for pulling in batches. if a single request cannot pull all the data entries, the API will return `scrolltoken`, and if the next request carries it, the next pull will start from the next entry.
     */
    public $ScrollToken;

    /**
     * @var integer Pagination offset, default value: 0. this field is obsolete. please use the `scrolltoken` parameter for batch queries.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries. default value: 10. maximum value: 100.
     */
    public $Limit;

    /**
     * @param integer $SubAppId <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id. starting from december 25, 2023, if you want to access resources in the vod application (whether it is the default application or a newly created application), you must enter the application id in this field.</b>.
     * @param array $RoundPlayIds Filter criteria: playlist identifier, array length limit: 100.
     * @param string $Status Filter criteria: playlist status, optional values: <li>enabled: startup status;</li> <li>disabled: stopped status.</li>.
     * @param TimeRange $CreateTime Filter criteria: playlist creation time.
     * @param TimeRange $UpdateTime Filter criteria: playlist update time.
     * @param string $ScrollToken Scrolling identifier which is used for pulling in batches. if a single request cannot pull all the data entries, the API will return `scrolltoken`, and if the next request carries it, the next pull will start from the next entry.
     * @param integer $Offset Pagination offset, default value: 0. this field is obsolete. please use the `scrolltoken` parameter for batch queries.
     * @param integer $Limit Number of returned entries. default value: 10. maximum value: 100.
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

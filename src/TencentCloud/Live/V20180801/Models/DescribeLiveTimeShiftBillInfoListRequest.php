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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveTimeShiftBillInfoList request structure.
 *
 * @method string getStartTime() Obtain The start time for query. You can query data from the past three months. The longest time period that can be queried is one month.

It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
 * @method void setStartTime(string $StartTime) Set The start time for query. You can query data from the past three months. The longest time period that can be queried is one month.

It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
 * @method string getEndTime() Obtain The end time for query. You can query data from the past three months. The longest time period that can be queried is one month.

It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
 * @method void setEndTime(string $EndTime) Set The end time for query. You can query data from the past three months. The longest time period that can be queried is one month.

It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
 * @method array getPushDomains() Obtain The push domains to query. If you leave this empty, the time shifting billing data of all push domains will be returned.
 * @method void setPushDomains(array $PushDomains) Set The push domains to query. If you leave this empty, the time shifting billing data of all push domains will be returned.
 */
class DescribeLiveTimeShiftBillInfoListRequest extends AbstractModel
{
    /**
     * @var string The start time for query. You can query data from the past three months. The longest time period that can be queried is one month.

It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
     */
    public $StartTime;

    /**
     * @var string The end time for query. You can query data from the past three months. The longest time period that can be queried is one month.

It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
     */
    public $EndTime;

    /**
     * @var array The push domains to query. If you leave this empty, the time shifting billing data of all push domains will be returned.
     */
    public $PushDomains;

    /**
     * @param string $StartTime The start time for query. You can query data from the past three months. The longest time period that can be queried is one month.

It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
     * @param string $EndTime The end time for query. You can query data from the past three months. The longest time period that can be queried is one month.

It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
     * @param array $PushDomains The push domains to query. If you leave this empty, the time shifting billing data of all push domains will be returned.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PushDomains",$param) and $param["PushDomains"] !== null) {
            $this->PushDomains = $param["PushDomains"];
        }
    }
}

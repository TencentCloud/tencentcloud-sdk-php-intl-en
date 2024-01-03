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
 * DescribeDailyPlayStatFileList request structure.
 *
 * @method string getStartTime() Obtain Start date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method void setStartTime(string $StartTime) Set Start date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method string getEndTime() Obtain End date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method void setEndTime(string $EndTime) Set End date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 */
class DescribeDailyPlayStatFileListRequest extends AbstractModel
{
    /**
     * @var string Start date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     */
    public $StartTime;

    /**
     * @var string End date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     */
    public $EndTime;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @param string $StartTime Start date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     * @param string $EndTime End date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}

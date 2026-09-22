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
 * DescribeDailyMostPlayedStat request structure.
 *
 * @method string getDate() Obtain Query date, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). This parameter is only valid for the date part.
 * @method void setDate(string $Date) Set Query date, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). This parameter is only valid for the date part.
 * @method string getDomainName() Obtain Domain name. Query playback stats of the Top 100 media files for that domain name. Query playback stats of all domain names by default.
 * @method void setDomainName(string $DomainName) Set Domain name. Query playback stats of the Top 100 media files for that domain name. Query playback stats of all domain names by default.
 * @method string getMetric() Obtain Statistical metrics for Top data. Valid values:
<li>Traffic: playback traffic. The data of Top 100 is collected by playback traffic.</li>
<li>PlayTimes: number of plays, the data of the Top 100 by playback count.</li>
Default value: Traffic.
 * @method void setMetric(string $Metric) Set Statistical metrics for Top data. Valid values:
<li>Traffic: playback traffic. The data of Top 100 is collected by playback traffic.</li>
<li>PlayTimes: number of plays, the data of the Top 100 by playback count.</li>
Default value: Traffic.
 * @method integer getSubAppId() Obtain <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be filled with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be filled with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b>
 */
class DescribeDailyMostPlayedStatRequest extends AbstractModel
{
    /**
     * @var string Query date, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). This parameter is only valid for the date part.
     */
    public $Date;

    /**
     * @var string Domain name. Query playback stats of the Top 100 media files for that domain name. Query playback stats of all domain names by default.
     */
    public $DomainName;

    /**
     * @var string Statistical metrics for Top data. Valid values:
<li>Traffic: playback traffic. The data of Top 100 is collected by playback traffic.</li>
<li>PlayTimes: number of plays, the data of the Top 100 by playback count.</li>
Default value: Traffic.
     */
    public $Metric;

    /**
     * @var integer <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be filled with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @param string $Date Query date, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). This parameter is only valid for the date part.
     * @param string $DomainName Domain name. Query playback stats of the Top 100 media files for that domain name. Query playback stats of all domain names by default.
     * @param string $Metric Statistical metrics for Top data. Valid values:
<li>Traffic: playback traffic. The data of Top 100 is collected by playback traffic.</li>
<li>PlayTimes: number of plays, the data of the Top 100 by playback count.</li>
Default value: Traffic.
     * @param integer $SubAppId <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be filled with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b>
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}

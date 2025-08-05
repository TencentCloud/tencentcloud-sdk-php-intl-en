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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillingData request structure.
 *
 * @method string getStartTime() Obtain The start time.
 * @method void setStartTime(string $StartTime) Set The start time.
 * @method string getEndTime() Obtain End time. the query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method void setEndTime(string $EndTime) Set End time. the query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method array getZoneIds() Obtain Site ID set. this parameter is required. a maximum of 100 site ids can be imported. use `*` to query data for all sites under the tencent cloud root account. querying account-level data requires permissions for all site resources in this api.
 * @method void setZoneIds(array $ZoneIds) Set Site ID set. this parameter is required. a maximum of 100 site ids can be imported. use `*` to query data for all sites under the tencent cloud root account. querying account-level data requires permissions for all site resources in this api.
 * @method string getMetricName() Obtain Metric list. values as follows:.
<b>l4/l7 acceleration traffic:</b><li>acc_flux: specifies content acceleration traffic in bytes.</li><li>smt_flux: specifies smart acceleration traffic in bytes.</li><li>l4_flux: specifies layer 4 acceleration traffic in bytes.</li><li>sec_flux: specifies independent protection traffic in bytes.</li><li>zxctg_flux: specifies network optimization traffic in the chinese mainland in bytes.</li><br><b>l4/l7 acceleration bandwidth:</b><li>acc_bandwidth: specifies content acceleration bandwidth in bps.</li><li>smt_bandwidth: specifies intelligent acceleration bandwidth in bps.</li><li>l4_bandwidth: specifies layer 4 acceleration bandwidth in bps.</li><li>sec_bandwidth: specifies exclusive protection bandwidth in bps.</li><li>zxctg_bandwidth: specifies network optimization bandwidth in the chinese mainland in bps.</li><br><b>HTTP/HTTPS security requests:</b><li>sec_request_clean: specifies HTTP/HTTPS requests by count.</li><br><b>vas usage:</b><li>smt_request_clean: specifies intelligent acceleration requests by count.</li><li>quic_request: specifies quic requests by count.</li><li>bot_request_clean: specifies bot requests by count.</li><li>cls_count: specifies the number of real-time log pushes by count.</li><li>ddos_bandwidth: specifies elastic ddos protection bandwidth in bps.</li><br><b>edge computing usage:</b><li>edgefunction_request: specifies the number of edge function requests by count.</li><li>edgefunction_cpu_time: specifies edge function cpu processing time in milliseconds.</li>.
<b>Media processing usage:</b> <li>total_transcode: all specification audio, video jit transcoding, repackaging duration, in seconds;</li> <li>remux: repackaging duration, in seconds;</li> <li>transcode_audio: audio transcoding duration, in seconds;</li> <li>transcode_H264_SD: H.264 encoded standard-definition video (short side ≤ 480 px) duration, in seconds;</li> <li>transcode_H264_HD: H.264 encoded high-definition video (short side ≤ 720 px) duration, in seconds;</li> <li>transcode_H264_FHD: H.264 encoded full HD video (short side ≤ 1080 px) duration, in seconds;</li> <li>transcode_H264_2K: H.264 encoded 2K video (short side ≤ 1440 px) duration, in seconds.</li>.
 * @method void setMetricName(string $MetricName) Set Metric list. values as follows:.
<b>l4/l7 acceleration traffic:</b><li>acc_flux: specifies content acceleration traffic in bytes.</li><li>smt_flux: specifies smart acceleration traffic in bytes.</li><li>l4_flux: specifies layer 4 acceleration traffic in bytes.</li><li>sec_flux: specifies independent protection traffic in bytes.</li><li>zxctg_flux: specifies network optimization traffic in the chinese mainland in bytes.</li><br><b>l4/l7 acceleration bandwidth:</b><li>acc_bandwidth: specifies content acceleration bandwidth in bps.</li><li>smt_bandwidth: specifies intelligent acceleration bandwidth in bps.</li><li>l4_bandwidth: specifies layer 4 acceleration bandwidth in bps.</li><li>sec_bandwidth: specifies exclusive protection bandwidth in bps.</li><li>zxctg_bandwidth: specifies network optimization bandwidth in the chinese mainland in bps.</li><br><b>HTTP/HTTPS security requests:</b><li>sec_request_clean: specifies HTTP/HTTPS requests by count.</li><br><b>vas usage:</b><li>smt_request_clean: specifies intelligent acceleration requests by count.</li><li>quic_request: specifies quic requests by count.</li><li>bot_request_clean: specifies bot requests by count.</li><li>cls_count: specifies the number of real-time log pushes by count.</li><li>ddos_bandwidth: specifies elastic ddos protection bandwidth in bps.</li><br><b>edge computing usage:</b><li>edgefunction_request: specifies the number of edge function requests by count.</li><li>edgefunction_cpu_time: specifies edge function cpu processing time in milliseconds.</li>.
<b>Media processing usage:</b> <li>total_transcode: all specification audio, video jit transcoding, repackaging duration, in seconds;</li> <li>remux: repackaging duration, in seconds;</li> <li>transcode_audio: audio transcoding duration, in seconds;</li> <li>transcode_H264_SD: H.264 encoded standard-definition video (short side ≤ 480 px) duration, in seconds;</li> <li>transcode_H264_HD: H.264 encoded high-definition video (short side ≤ 720 px) duration, in seconds;</li> <li>transcode_H264_FHD: H.264 encoded full HD video (short side ≤ 1080 px) duration, in seconds;</li> <li>transcode_H264_2K: H.264 encoded 2K video (short side ≤ 1440 px) duration, in seconds.</li>.
 * @method string getInterval() Obtain Time granularity of the query. Valid values:
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>
 * @method void setInterval(string $Interval) Set Time granularity of the query. Valid values:
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>
 * @method array getFilters() Obtain Filter criteria. the detailed values of filter criteria are as follows:.
<li>host: specifies the domain name to filter by. example value: test.example.com.<br></li>.
<li>proxy-id: specifies the l4 proxy instance id for filtering. example value: sid-2rugn89bkla9.</li>.
<li>region-id: Filter by billing region. Options:<br>  CH: Chinese mainland<br>  AF: Africa<br>  AS1: Asia-Pacific Region 1<br>  AS2: Asia-Pacific Region 2<br>  AS3: Asia-Pacific Region 3<br>  EU: Europe<br>  MidEast: Middle East<br>  NA: North America<br>  SA: South America</li>

Specifies that `BillingDataFilter` with the same `Type` have an "or" relationship with each other, while those with different `Type` have an "and" relationship between them.
 * @method void setFilters(array $Filters) Set Filter criteria. the detailed values of filter criteria are as follows:.
<li>host: specifies the domain name to filter by. example value: test.example.com.<br></li>.
<li>proxy-id: specifies the l4 proxy instance id for filtering. example value: sid-2rugn89bkla9.</li>.
<li>region-id: Filter by billing region. Options:<br>  CH: Chinese mainland<br>  AF: Africa<br>  AS1: Asia-Pacific Region 1<br>  AS2: Asia-Pacific Region 2<br>  AS3: Asia-Pacific Region 3<br>  EU: Europe<br>  MidEast: Middle East<br>  NA: North America<br>  SA: South America</li>

Specifies that `BillingDataFilter` with the same `Type` have an "or" relationship with each other, while those with different `Type` have an "and" relationship between them.
 * @method array getGroupBy() Obtain Grouping aggregate dimension. a maximum of two dimensions can be grouped simultaneously. values are as follows: <li>zone-id: group by site id. if the content identifier functionality is used, priority is given to grouping by content identifier;<br></li> <li>host: group by domain name;<br></li> <li>proxy-id: group by layer 4 proxy instance id;<br></li> <li>region-id: group by billing region.</li>.
 * @method void setGroupBy(array $GroupBy) Set Grouping aggregate dimension. a maximum of two dimensions can be grouped simultaneously. values are as follows: <li>zone-id: group by site id. if the content identifier functionality is used, priority is given to grouping by content identifier;<br></li> <li>host: group by domain name;<br></li> <li>proxy-id: group by layer 4 proxy instance id;<br></li> <li>region-id: group by billing region.</li>.
 */
class DescribeBillingDataRequest extends AbstractModel
{
    /**
     * @var string The start time.
     */
    public $StartTime;

    /**
     * @var string End time. the query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     */
    public $EndTime;

    /**
     * @var array Site ID set. this parameter is required. a maximum of 100 site ids can be imported. use `*` to query data for all sites under the tencent cloud root account. querying account-level data requires permissions for all site resources in this api.
     */
    public $ZoneIds;

    /**
     * @var string Metric list. values as follows:.
<b>l4/l7 acceleration traffic:</b><li>acc_flux: specifies content acceleration traffic in bytes.</li><li>smt_flux: specifies smart acceleration traffic in bytes.</li><li>l4_flux: specifies layer 4 acceleration traffic in bytes.</li><li>sec_flux: specifies independent protection traffic in bytes.</li><li>zxctg_flux: specifies network optimization traffic in the chinese mainland in bytes.</li><br><b>l4/l7 acceleration bandwidth:</b><li>acc_bandwidth: specifies content acceleration bandwidth in bps.</li><li>smt_bandwidth: specifies intelligent acceleration bandwidth in bps.</li><li>l4_bandwidth: specifies layer 4 acceleration bandwidth in bps.</li><li>sec_bandwidth: specifies exclusive protection bandwidth in bps.</li><li>zxctg_bandwidth: specifies network optimization bandwidth in the chinese mainland in bps.</li><br><b>HTTP/HTTPS security requests:</b><li>sec_request_clean: specifies HTTP/HTTPS requests by count.</li><br><b>vas usage:</b><li>smt_request_clean: specifies intelligent acceleration requests by count.</li><li>quic_request: specifies quic requests by count.</li><li>bot_request_clean: specifies bot requests by count.</li><li>cls_count: specifies the number of real-time log pushes by count.</li><li>ddos_bandwidth: specifies elastic ddos protection bandwidth in bps.</li><br><b>edge computing usage:</b><li>edgefunction_request: specifies the number of edge function requests by count.</li><li>edgefunction_cpu_time: specifies edge function cpu processing time in milliseconds.</li>.
<b>Media processing usage:</b> <li>total_transcode: all specification audio, video jit transcoding, repackaging duration, in seconds;</li> <li>remux: repackaging duration, in seconds;</li> <li>transcode_audio: audio transcoding duration, in seconds;</li> <li>transcode_H264_SD: H.264 encoded standard-definition video (short side ≤ 480 px) duration, in seconds;</li> <li>transcode_H264_HD: H.264 encoded high-definition video (short side ≤ 720 px) duration, in seconds;</li> <li>transcode_H264_FHD: H.264 encoded full HD video (short side ≤ 1080 px) duration, in seconds;</li> <li>transcode_H264_2K: H.264 encoded 2K video (short side ≤ 1440 px) duration, in seconds.</li>.
     */
    public $MetricName;

    /**
     * @var string Time granularity of the query. Valid values:
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>
     */
    public $Interval;

    /**
     * @var array Filter criteria. the detailed values of filter criteria are as follows:.
<li>host: specifies the domain name to filter by. example value: test.example.com.<br></li>.
<li>proxy-id: specifies the l4 proxy instance id for filtering. example value: sid-2rugn89bkla9.</li>.
<li>region-id: Filter by billing region. Options:<br>  CH: Chinese mainland<br>  AF: Africa<br>  AS1: Asia-Pacific Region 1<br>  AS2: Asia-Pacific Region 2<br>  AS3: Asia-Pacific Region 3<br>  EU: Europe<br>  MidEast: Middle East<br>  NA: North America<br>  SA: South America</li>

Specifies that `BillingDataFilter` with the same `Type` have an "or" relationship with each other, while those with different `Type` have an "and" relationship between them.
     */
    public $Filters;

    /**
     * @var array Grouping aggregate dimension. a maximum of two dimensions can be grouped simultaneously. values are as follows: <li>zone-id: group by site id. if the content identifier functionality is used, priority is given to grouping by content identifier;<br></li> <li>host: group by domain name;<br></li> <li>proxy-id: group by layer 4 proxy instance id;<br></li> <li>region-id: group by billing region.</li>.
     */
    public $GroupBy;

    /**
     * @param string $StartTime The start time.
     * @param string $EndTime End time. the query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     * @param array $ZoneIds Site ID set. this parameter is required. a maximum of 100 site ids can be imported. use `*` to query data for all sites under the tencent cloud root account. querying account-level data requires permissions for all site resources in this api.
     * @param string $MetricName Metric list. values as follows:.
<b>l4/l7 acceleration traffic:</b><li>acc_flux: specifies content acceleration traffic in bytes.</li><li>smt_flux: specifies smart acceleration traffic in bytes.</li><li>l4_flux: specifies layer 4 acceleration traffic in bytes.</li><li>sec_flux: specifies independent protection traffic in bytes.</li><li>zxctg_flux: specifies network optimization traffic in the chinese mainland in bytes.</li><br><b>l4/l7 acceleration bandwidth:</b><li>acc_bandwidth: specifies content acceleration bandwidth in bps.</li><li>smt_bandwidth: specifies intelligent acceleration bandwidth in bps.</li><li>l4_bandwidth: specifies layer 4 acceleration bandwidth in bps.</li><li>sec_bandwidth: specifies exclusive protection bandwidth in bps.</li><li>zxctg_bandwidth: specifies network optimization bandwidth in the chinese mainland in bps.</li><br><b>HTTP/HTTPS security requests:</b><li>sec_request_clean: specifies HTTP/HTTPS requests by count.</li><br><b>vas usage:</b><li>smt_request_clean: specifies intelligent acceleration requests by count.</li><li>quic_request: specifies quic requests by count.</li><li>bot_request_clean: specifies bot requests by count.</li><li>cls_count: specifies the number of real-time log pushes by count.</li><li>ddos_bandwidth: specifies elastic ddos protection bandwidth in bps.</li><br><b>edge computing usage:</b><li>edgefunction_request: specifies the number of edge function requests by count.</li><li>edgefunction_cpu_time: specifies edge function cpu processing time in milliseconds.</li>.
<b>Media processing usage:</b> <li>total_transcode: all specification audio, video jit transcoding, repackaging duration, in seconds;</li> <li>remux: repackaging duration, in seconds;</li> <li>transcode_audio: audio transcoding duration, in seconds;</li> <li>transcode_H264_SD: H.264 encoded standard-definition video (short side ≤ 480 px) duration, in seconds;</li> <li>transcode_H264_HD: H.264 encoded high-definition video (short side ≤ 720 px) duration, in seconds;</li> <li>transcode_H264_FHD: H.264 encoded full HD video (short side ≤ 1080 px) duration, in seconds;</li> <li>transcode_H264_2K: H.264 encoded 2K video (short side ≤ 1440 px) duration, in seconds.</li>.
     * @param string $Interval Time granularity of the query. Valid values:
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>
     * @param array $Filters Filter criteria. the detailed values of filter criteria are as follows:.
<li>host: specifies the domain name to filter by. example value: test.example.com.<br></li>.
<li>proxy-id: specifies the l4 proxy instance id for filtering. example value: sid-2rugn89bkla9.</li>.
<li>region-id: Filter by billing region. Options:<br>  CH: Chinese mainland<br>  AF: Africa<br>  AS1: Asia-Pacific Region 1<br>  AS2: Asia-Pacific Region 2<br>  AS3: Asia-Pacific Region 3<br>  EU: Europe<br>  MidEast: Middle East<br>  NA: North America<br>  SA: South America</li>

Specifies that `BillingDataFilter` with the same `Type` have an "or" relationship with each other, while those with different `Type` have an "and" relationship between them.
     * @param array $GroupBy Grouping aggregate dimension. a maximum of two dimensions can be grouped simultaneously. values are as follows: <li>zone-id: group by site id. if the content identifier functionality is used, priority is given to grouping by content identifier;<br></li> <li>host: group by domain name;<br></li> <li>proxy-id: group by layer 4 proxy instance id;<br></li> <li>region-id: group by billing region.</li>.
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

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new BillingDataFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }
    }
}

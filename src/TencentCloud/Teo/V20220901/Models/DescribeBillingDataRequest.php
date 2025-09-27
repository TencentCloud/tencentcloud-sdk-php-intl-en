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
 * @method string getStartTime() Obtain The start time. Data will be returned according to the timezone of the input timestamp.
 * @method void setStartTime(string $StartTime) Set The start time. Data will be returned according to the timezone of the input timestamp.
 * @method string getEndTime() Obtain The end time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days. The timezone of the end timestamp must be consistent with the start timestamp, and data will be returned according to the timezone of the input timestamps.
 * @method void setEndTime(string $EndTime) Set The end time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days. The timezone of the end timestamp must be consistent with the start timestamp, and data will be returned according to the timezone of the input timestamps.
 * @method array getZoneIds() Obtain Site ID set. This parameter is required. A maximum of 100 site ids can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. Querying account-level data requires permissions for all site resources in this API.
 * @method void setZoneIds(array $ZoneIds) Set Site ID set. This parameter is required. A maximum of 100 site ids can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. Querying account-level data requires permissions for all site resources in this API.
 * @method string getMetricName() Obtain Metric list. Values as follows:.
<b>L4/L7 acceleration traffic:</b><li>acc_flux: specifies content acceleration traffic in bytes.</li><li>smt_flux: specifies smart acceleration traffic in bytes.</li><li>l4_flux: specifies layer 4 acceleration traffic in bytes.</li><li>sec_flux: specifies independent protection traffic in bytes.</li><li>zxctg_flux: specifies network optimization traffic in the chinese mainland in bytes.</li><br><b>L4/L7 acceleration bandwidth:</b><li>acc_bandwidth: specifies content acceleration bandwidth in bps.</li><li>smt_bandwidth: specifies intelligent acceleration bandwidth in bps.</li><li>l4_bandwidth: specifies layer 4 acceleration bandwidth in bps.</li><li>sec_bandwidth: specifies exclusive protection bandwidth in bps.</li><li>zxctg_bandwidth: specifies network optimization bandwidth in the chinese mainland in bps.</li><br><b>HTTP/HTTPS security requests:</b><li>sec_request_clean: specifies HTTP/HTTPS requests by count.</li><br><b>Value-added service usage:</b><li>smt_request_clean: specifies intelligent acceleration requests by count.</li><li>quic_request: specifies quic requests by count.</li><li>bot_request_clean: specifies bot requests by count.</li><li>cls_count: specifies the number of real-time log pushes by count.</li><li>ddos_bandwidth: specifies elastic ddos protection bandwidth in bps.</li><br><b>Edge computing usage:</b><li>edgefunction_request: specifies the number of edge function requests by count.</li><li>edgefunction_cpu_time: specifies edge function cpu processing time in milliseconds.</li>
<b>Media processing usage:</b> <li>total_transcode: all specification audio, video jit transcoding, repackaging duration, in seconds;</li> <li>remux: repackaging duration, in seconds;</li> <li>transcode_audio: audio transcoding duration, in seconds;</li> <li>transcode_H264_SD: H.264 encoded standard-definition video (short side less than or equal to 480 px) duration, in seconds;</li> <li>transcode_H264_HD: H.264 encoded high-definition video (short side less than or equal to 720 px) duration, in seconds;</li> <li>transcode_H264_FHD: H.264 encoded full HD video (short side less than or equal to 1080 px) duration, in seconds;</li> <li>transcode_H264_2K: H.264 encoded 2K video (short side less than or equal to 1440 px) duration, in seconds.</li>
 * @method void setMetricName(string $MetricName) Set Metric list. Values as follows:.
<b>L4/L7 acceleration traffic:</b><li>acc_flux: specifies content acceleration traffic in bytes.</li><li>smt_flux: specifies smart acceleration traffic in bytes.</li><li>l4_flux: specifies layer 4 acceleration traffic in bytes.</li><li>sec_flux: specifies independent protection traffic in bytes.</li><li>zxctg_flux: specifies network optimization traffic in the chinese mainland in bytes.</li><br><b>L4/L7 acceleration bandwidth:</b><li>acc_bandwidth: specifies content acceleration bandwidth in bps.</li><li>smt_bandwidth: specifies intelligent acceleration bandwidth in bps.</li><li>l4_bandwidth: specifies layer 4 acceleration bandwidth in bps.</li><li>sec_bandwidth: specifies exclusive protection bandwidth in bps.</li><li>zxctg_bandwidth: specifies network optimization bandwidth in the chinese mainland in bps.</li><br><b>HTTP/HTTPS security requests:</b><li>sec_request_clean: specifies HTTP/HTTPS requests by count.</li><br><b>Value-added service usage:</b><li>smt_request_clean: specifies intelligent acceleration requests by count.</li><li>quic_request: specifies quic requests by count.</li><li>bot_request_clean: specifies bot requests by count.</li><li>cls_count: specifies the number of real-time log pushes by count.</li><li>ddos_bandwidth: specifies elastic ddos protection bandwidth in bps.</li><br><b>Edge computing usage:</b><li>edgefunction_request: specifies the number of edge function requests by count.</li><li>edgefunction_cpu_time: specifies edge function cpu processing time in milliseconds.</li>
<b>Media processing usage:</b> <li>total_transcode: all specification audio, video jit transcoding, repackaging duration, in seconds;</li> <li>remux: repackaging duration, in seconds;</li> <li>transcode_audio: audio transcoding duration, in seconds;</li> <li>transcode_H264_SD: H.264 encoded standard-definition video (short side less than or equal to 480 px) duration, in seconds;</li> <li>transcode_H264_HD: H.264 encoded high-definition video (short side less than or equal to 720 px) duration, in seconds;</li> <li>transcode_H264_FHD: H.264 encoded full HD video (short side less than or equal to 1080 px) duration, in seconds;</li> <li>transcode_H264_2K: H.264 encoded 2K video (short side less than or equal to 1440 px) duration, in seconds.</li>
 * @method string getInterval() Obtain Time granularity of the query. Valid values:
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>
 * @method void setInterval(string $Interval) Set Time granularity of the query. Valid values:
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>
 * @method array getFilters() Obtain Filter criteria. The detailed values of filter criteria are as follows:
<li>host: Specifies the domain name to filter by. Example value: test.example.com<br></li>
<li>proxy-id: Specifies the L4 proxy instance ID for filtering. Example value: sid-2rugn89bkla9.</li>
<li>region-id: Filter by billing region. Options:<br>  CH: Chinese mainland<br>  AF: Africa<br>  AS1: Asia-Pacific Region 1<br>  AS2: Asia-Pacific Region 2<br>  AS3: Asia-Pacific Region 3<br>  EU: Europe<br>  MidEast: Middle East<br>  NA: North America<br>  SA: South America</li>

Note: `BillingDataFilter` with the same `Type` have an "or" relationship with each other, while those with different `Type` have an "and" relationship between them.
 * @method void setFilters(array $Filters) Set Filter criteria. The detailed values of filter criteria are as follows:
<li>host: Specifies the domain name to filter by. Example value: test.example.com<br></li>
<li>proxy-id: Specifies the L4 proxy instance ID for filtering. Example value: sid-2rugn89bkla9.</li>
<li>region-id: Filter by billing region. Options:<br>  CH: Chinese mainland<br>  AF: Africa<br>  AS1: Asia-Pacific Region 1<br>  AS2: Asia-Pacific Region 2<br>  AS3: Asia-Pacific Region 3<br>  EU: Europe<br>  MidEast: Middle East<br>  NA: North America<br>  SA: South America</li>

Note: `BillingDataFilter` with the same `Type` have an "or" relationship with each other, while those with different `Type` have an "and" relationship between them.
 * @method array getGroupBy() Obtain Aggregation dimensions for grouping. You are allowed to group by up to two dimensions at the same time. Valid values are as follows:<li>zone-id: Group by zone ID. If the content identifier feature is used, it will take precedence and group by content identifier first;<br></li> <li>host: Group by domain name;<br></li> <li>proxy-id: Group by L4 proxy instance ID;<br></li> <li>region-id: Group by billing region.</li>
Note: The output parameter's default maximum value for the number of groups is 200. If you encounter an error related to this limit, you should reduce the number of groups in the final output by narrowing down the query scope using `ZoneIds.N` or `Filters.N` parameters, or by decreasing the number of dimensions specified in the `GroupBy.N` parameter.
 * @method void setGroupBy(array $GroupBy) Set Aggregation dimensions for grouping. You are allowed to group by up to two dimensions at the same time. Valid values are as follows:<li>zone-id: Group by zone ID. If the content identifier feature is used, it will take precedence and group by content identifier first;<br></li> <li>host: Group by domain name;<br></li> <li>proxy-id: Group by L4 proxy instance ID;<br></li> <li>region-id: Group by billing region.</li>
Note: The output parameter's default maximum value for the number of groups is 200. If you encounter an error related to this limit, you should reduce the number of groups in the final output by narrowing down the query scope using `ZoneIds.N` or `Filters.N` parameters, or by decreasing the number of dimensions specified in the `GroupBy.N` parameter.
 */
class DescribeBillingDataRequest extends AbstractModel
{
    /**
     * @var string The start time. Data will be returned according to the timezone of the input timestamp.
     */
    public $StartTime;

    /**
     * @var string The end time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days. The timezone of the end timestamp must be consistent with the start timestamp, and data will be returned according to the timezone of the input timestamps.
     */
    public $EndTime;

    /**
     * @var array Site ID set. This parameter is required. A maximum of 100 site ids can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. Querying account-level data requires permissions for all site resources in this API.
     */
    public $ZoneIds;

    /**
     * @var string Metric list. Values as follows:.
<b>L4/L7 acceleration traffic:</b><li>acc_flux: specifies content acceleration traffic in bytes.</li><li>smt_flux: specifies smart acceleration traffic in bytes.</li><li>l4_flux: specifies layer 4 acceleration traffic in bytes.</li><li>sec_flux: specifies independent protection traffic in bytes.</li><li>zxctg_flux: specifies network optimization traffic in the chinese mainland in bytes.</li><br><b>L4/L7 acceleration bandwidth:</b><li>acc_bandwidth: specifies content acceleration bandwidth in bps.</li><li>smt_bandwidth: specifies intelligent acceleration bandwidth in bps.</li><li>l4_bandwidth: specifies layer 4 acceleration bandwidth in bps.</li><li>sec_bandwidth: specifies exclusive protection bandwidth in bps.</li><li>zxctg_bandwidth: specifies network optimization bandwidth in the chinese mainland in bps.</li><br><b>HTTP/HTTPS security requests:</b><li>sec_request_clean: specifies HTTP/HTTPS requests by count.</li><br><b>Value-added service usage:</b><li>smt_request_clean: specifies intelligent acceleration requests by count.</li><li>quic_request: specifies quic requests by count.</li><li>bot_request_clean: specifies bot requests by count.</li><li>cls_count: specifies the number of real-time log pushes by count.</li><li>ddos_bandwidth: specifies elastic ddos protection bandwidth in bps.</li><br><b>Edge computing usage:</b><li>edgefunction_request: specifies the number of edge function requests by count.</li><li>edgefunction_cpu_time: specifies edge function cpu processing time in milliseconds.</li>
<b>Media processing usage:</b> <li>total_transcode: all specification audio, video jit transcoding, repackaging duration, in seconds;</li> <li>remux: repackaging duration, in seconds;</li> <li>transcode_audio: audio transcoding duration, in seconds;</li> <li>transcode_H264_SD: H.264 encoded standard-definition video (short side less than or equal to 480 px) duration, in seconds;</li> <li>transcode_H264_HD: H.264 encoded high-definition video (short side less than or equal to 720 px) duration, in seconds;</li> <li>transcode_H264_FHD: H.264 encoded full HD video (short side less than or equal to 1080 px) duration, in seconds;</li> <li>transcode_H264_2K: H.264 encoded 2K video (short side less than or equal to 1440 px) duration, in seconds.</li>
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
     * @var array Filter criteria. The detailed values of filter criteria are as follows:
<li>host: Specifies the domain name to filter by. Example value: test.example.com<br></li>
<li>proxy-id: Specifies the L4 proxy instance ID for filtering. Example value: sid-2rugn89bkla9.</li>
<li>region-id: Filter by billing region. Options:<br>  CH: Chinese mainland<br>  AF: Africa<br>  AS1: Asia-Pacific Region 1<br>  AS2: Asia-Pacific Region 2<br>  AS3: Asia-Pacific Region 3<br>  EU: Europe<br>  MidEast: Middle East<br>  NA: North America<br>  SA: South America</li>

Note: `BillingDataFilter` with the same `Type` have an "or" relationship with each other, while those with different `Type` have an "and" relationship between them.
     */
    public $Filters;

    /**
     * @var array Aggregation dimensions for grouping. You are allowed to group by up to two dimensions at the same time. Valid values are as follows:<li>zone-id: Group by zone ID. If the content identifier feature is used, it will take precedence and group by content identifier first;<br></li> <li>host: Group by domain name;<br></li> <li>proxy-id: Group by L4 proxy instance ID;<br></li> <li>region-id: Group by billing region.</li>
Note: The output parameter's default maximum value for the number of groups is 200. If you encounter an error related to this limit, you should reduce the number of groups in the final output by narrowing down the query scope using `ZoneIds.N` or `Filters.N` parameters, or by decreasing the number of dimensions specified in the `GroupBy.N` parameter.
     */
    public $GroupBy;

    /**
     * @param string $StartTime The start time. Data will be returned according to the timezone of the input timestamp.
     * @param string $EndTime The end time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days. The timezone of the end timestamp must be consistent with the start timestamp, and data will be returned according to the timezone of the input timestamps.
     * @param array $ZoneIds Site ID set. This parameter is required. A maximum of 100 site ids can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. Querying account-level data requires permissions for all site resources in this API.
     * @param string $MetricName Metric list. Values as follows:.
<b>L4/L7 acceleration traffic:</b><li>acc_flux: specifies content acceleration traffic in bytes.</li><li>smt_flux: specifies smart acceleration traffic in bytes.</li><li>l4_flux: specifies layer 4 acceleration traffic in bytes.</li><li>sec_flux: specifies independent protection traffic in bytes.</li><li>zxctg_flux: specifies network optimization traffic in the chinese mainland in bytes.</li><br><b>L4/L7 acceleration bandwidth:</b><li>acc_bandwidth: specifies content acceleration bandwidth in bps.</li><li>smt_bandwidth: specifies intelligent acceleration bandwidth in bps.</li><li>l4_bandwidth: specifies layer 4 acceleration bandwidth in bps.</li><li>sec_bandwidth: specifies exclusive protection bandwidth in bps.</li><li>zxctg_bandwidth: specifies network optimization bandwidth in the chinese mainland in bps.</li><br><b>HTTP/HTTPS security requests:</b><li>sec_request_clean: specifies HTTP/HTTPS requests by count.</li><br><b>Value-added service usage:</b><li>smt_request_clean: specifies intelligent acceleration requests by count.</li><li>quic_request: specifies quic requests by count.</li><li>bot_request_clean: specifies bot requests by count.</li><li>cls_count: specifies the number of real-time log pushes by count.</li><li>ddos_bandwidth: specifies elastic ddos protection bandwidth in bps.</li><br><b>Edge computing usage:</b><li>edgefunction_request: specifies the number of edge function requests by count.</li><li>edgefunction_cpu_time: specifies edge function cpu processing time in milliseconds.</li>
<b>Media processing usage:</b> <li>total_transcode: all specification audio, video jit transcoding, repackaging duration, in seconds;</li> <li>remux: repackaging duration, in seconds;</li> <li>transcode_audio: audio transcoding duration, in seconds;</li> <li>transcode_H264_SD: H.264 encoded standard-definition video (short side less than or equal to 480 px) duration, in seconds;</li> <li>transcode_H264_HD: H.264 encoded high-definition video (short side less than or equal to 720 px) duration, in seconds;</li> <li>transcode_H264_FHD: H.264 encoded full HD video (short side less than or equal to 1080 px) duration, in seconds;</li> <li>transcode_H264_2K: H.264 encoded 2K video (short side less than or equal to 1440 px) duration, in seconds.</li>
     * @param string $Interval Time granularity of the query. Valid values:
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>
     * @param array $Filters Filter criteria. The detailed values of filter criteria are as follows:
<li>host: Specifies the domain name to filter by. Example value: test.example.com<br></li>
<li>proxy-id: Specifies the L4 proxy instance ID for filtering. Example value: sid-2rugn89bkla9.</li>
<li>region-id: Filter by billing region. Options:<br>  CH: Chinese mainland<br>  AF: Africa<br>  AS1: Asia-Pacific Region 1<br>  AS2: Asia-Pacific Region 2<br>  AS3: Asia-Pacific Region 3<br>  EU: Europe<br>  MidEast: Middle East<br>  NA: North America<br>  SA: South America</li>

Note: `BillingDataFilter` with the same `Type` have an "or" relationship with each other, while those with different `Type` have an "and" relationship between them.
     * @param array $GroupBy Aggregation dimensions for grouping. You are allowed to group by up to two dimensions at the same time. Valid values are as follows:<li>zone-id: Group by zone ID. If the content identifier feature is used, it will take precedence and group by content identifier first;<br></li> <li>host: Group by domain name;<br></li> <li>proxy-id: Group by L4 proxy instance ID;<br></li> <li>region-id: Group by billing region.</li>
Note: The output parameter's default maximum value for the number of groups is 200. If you encounter an error related to this limit, you should reduce the number of groups in the final output by narrowing down the query scope using `ZoneIds.N` or `Filters.N` parameters, or by decreasing the number of dimensions specified in the `GroupBy.N` parameter.
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

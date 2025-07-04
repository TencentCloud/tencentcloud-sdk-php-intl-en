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
 * DescribeAdaptiveDynamicStreamingTemplates response structure.
 *
 * @method integer getTotalCount() Obtain The total number of records matching the filter criteria.
 * @method void setTotalCount(integer $TotalCount) Set The total number of records matching the filter criteria.
 * @method array getAdaptiveDynamicStreamingTemplateSet() Obtain List of transcoding to adaptive bitrate streaming template details.
 * @method void setAdaptiveDynamicStreamingTemplateSet(array $AdaptiveDynamicStreamingTemplateSet) Set List of transcoding to adaptive bitrate streaming template details.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeAdaptiveDynamicStreamingTemplatesResponse extends AbstractModel
{
    /**
     * @var integer The total number of records matching the filter criteria.
     */
    public $TotalCount;

    /**
     * @var array List of transcoding to adaptive bitrate streaming template details.
     */
    public $AdaptiveDynamicStreamingTemplateSet;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount The total number of records matching the filter criteria.
     * @param array $AdaptiveDynamicStreamingTemplateSet List of transcoding to adaptive bitrate streaming template details.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("AdaptiveDynamicStreamingTemplateSet",$param) and $param["AdaptiveDynamicStreamingTemplateSet"] !== null) {
            $this->AdaptiveDynamicStreamingTemplateSet = [];
            foreach ($param["AdaptiveDynamicStreamingTemplateSet"] as $key => $value){
                $obj = new AdaptiveDynamicStreamingTemplate();
                $obj->deserialize($value);
                array_push($this->AdaptiveDynamicStreamingTemplateSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

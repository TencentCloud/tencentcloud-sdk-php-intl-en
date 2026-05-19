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
 * DescribeAigcUsageData request structure.
 *
 * @method string getStartTime() Obtain <p>Start date. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52">ISO date format</a>.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start date. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52">ISO date format</a>.</p>
 * @method string getEndTime() Obtain <p>End date, which must be greater than or equal to the start date. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52">ISO date format</a>.</p>
 * @method void setEndTime(string $EndTime) Set <p>End date, which must be greater than or equal to the start date. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52">ISO date format</a>.</p>
 * @method string getAigcType() Obtain <p>AIGC type.</p><p>Enumeration value:</p><ul><li>Video: Video</li><li>Image: Image</li><li>Text: Text</li><li>SceneAigcVideo: Scenario-based video processing</li><li>SceneAigcImage: Scenario-based image processing</li><li>SceneAigcTime: Scenario-based processing times</li></ul>
 * @method void setAigcType(string $AigcType) Set <p>AIGC type.</p><p>Enumeration value:</p><ul><li>Video: Video</li><li>Image: Image</li><li>Text: Text</li><li>SceneAigcVideo: Scenario-based video processing</li><li>SceneAigcImage: Scenario-based image processing</li><li>SceneAigcTime: Scenario-based processing times</li></ul>
 * @method integer getSubAppId() Obtain <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 */
class DescribeAigcUsageDataRequest extends AbstractModel
{
    /**
     * @var string <p>Start date. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52">ISO date format</a>.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End date, which must be greater than or equal to the start date. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52">ISO date format</a>.</p>
     */
    public $EndTime;

    /**
     * @var string <p>AIGC type.</p><p>Enumeration value:</p><ul><li>Video: Video</li><li>Image: Image</li><li>Text: Text</li><li>SceneAigcVideo: Scenario-based video processing</li><li>SceneAigcImage: Scenario-based image processing</li><li>SceneAigcTime: Scenario-based processing times</li></ul>
     */
    public $AigcType;

    /**
     * @var integer <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @param string $StartTime <p>Start date. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52">ISO date format</a>.</p>
     * @param string $EndTime <p>End date, which must be greater than or equal to the start date. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52">ISO date format</a>.</p>
     * @param string $AigcType <p>AIGC type.</p><p>Enumeration value:</p><ul><li>Video: Video</li><li>Image: Image</li><li>Text: Text</li><li>SceneAigcVideo: Scenario-based video processing</li><li>SceneAigcImage: Scenario-based image processing</li><li>SceneAigcTime: Scenario-based processing times</li></ul>
     * @param integer $SubAppId <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
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

        if (array_key_exists("AigcType",$param) and $param["AigcType"] !== null) {
            $this->AigcType = $param["AigcType"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}

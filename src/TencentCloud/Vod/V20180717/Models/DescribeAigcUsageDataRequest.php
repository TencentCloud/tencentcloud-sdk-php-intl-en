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
 * @method string getAigcType() Obtain <p>AIGC type.</p><p>Enumeration values:</p><ul><li>Video: Video</li><li>Image: Image</li><li>Text: Text</li><li>Audio: Audio</li><li>SceneAigcVideo: Scenario-based video processing</li><li>SceneAigcImage: Scenario-based image processing</li><li>SceneAigcTime: Scenario-based processing times</li><li>TextDetail: Text detailed record</li></ul>
 * @method void setAigcType(string $AigcType) Set <p>AIGC type.</p><p>Enumeration values:</p><ul><li>Video: Video</li><li>Image: Image</li><li>Text: Text</li><li>Audio: Audio</li><li>SceneAigcVideo: Scenario-based video processing</li><li>SceneAigcImage: Scenario-based image processing</li><li>SceneAigcTime: Scenario-based processing times</li><li>TextDetail: Text detailed record</li></ul>
 * @method integer getSubAppId() Obtain <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method string getAPIKey() Obtain <p>API Key</p>
 * @method void setAPIKey(string $APIKey) Set <p>API Key</p>
 * @method array getAPIKeys() Obtain <p>API Key</p>
 * @method void setAPIKeys(array $APIKeys) Set <p>API Key</p>
 * @method string getScrollToken() Obtain <p>Query cursor</p>
 * @method void setScrollToken(string $ScrollToken) Set <p>Query cursor</p>
 * @method integer getPageSize() Obtain <p>Size per page, maximum 200, it will be truncated to 200</p>
 * @method void setPageSize(integer $PageSize) Set <p>Size per page, maximum 200, it will be truncated to 200</p>
 * @method string getReqId() Obtain <p>RequestId of the raw text. Valid at that time when AigcType is TextDetail.</p>
 * @method void setReqId(string $ReqId) Set <p>RequestId of the raw text. Valid at that time when AigcType is TextDetail.</p>
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
     * @var string <p>AIGC type.</p><p>Enumeration values:</p><ul><li>Video: Video</li><li>Image: Image</li><li>Text: Text</li><li>Audio: Audio</li><li>SceneAigcVideo: Scenario-based video processing</li><li>SceneAigcImage: Scenario-based image processing</li><li>SceneAigcTime: Scenario-based processing times</li><li>TextDetail: Text detailed record</li></ul>
     */
    public $AigcType;

    /**
     * @var integer <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>API Key</p>
     */
    public $APIKey;

    /**
     * @var array <p>API Key</p>
     */
    public $APIKeys;

    /**
     * @var string <p>Query cursor</p>
     */
    public $ScrollToken;

    /**
     * @var integer <p>Size per page, maximum 200, it will be truncated to 200</p>
     */
    public $PageSize;

    /**
     * @var string <p>RequestId of the raw text. Valid at that time when AigcType is TextDetail.</p>
     */
    public $ReqId;

    /**
     * @param string $StartTime <p>Start date. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52">ISO date format</a>.</p>
     * @param string $EndTime <p>End date, which must be greater than or equal to the start date. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52">ISO date format</a>.</p>
     * @param string $AigcType <p>AIGC type.</p><p>Enumeration values:</p><ul><li>Video: Video</li><li>Image: Image</li><li>Text: Text</li><li>Audio: Audio</li><li>SceneAigcVideo: Scenario-based video processing</li><li>SceneAigcImage: Scenario-based image processing</li><li>SceneAigcTime: Scenario-based processing times</li><li>TextDetail: Text detailed record</li></ul>
     * @param integer $SubAppId <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     * @param string $APIKey <p>API Key</p>
     * @param array $APIKeys <p>API Key</p>
     * @param string $ScrollToken <p>Query cursor</p>
     * @param integer $PageSize <p>Size per page, maximum 200, it will be truncated to 200</p>
     * @param string $ReqId <p>RequestId of the raw text. Valid at that time when AigcType is TextDetail.</p>
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

        if (array_key_exists("APIKey",$param) and $param["APIKey"] !== null) {
            $this->APIKey = $param["APIKey"];
        }

        if (array_key_exists("APIKeys",$param) and $param["APIKeys"] !== null) {
            $this->APIKeys = $param["APIKeys"];
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ReqId",$param) and $param["ReqId"] !== null) {
            $this->ReqId = $param["ReqId"];
        }
    }
}

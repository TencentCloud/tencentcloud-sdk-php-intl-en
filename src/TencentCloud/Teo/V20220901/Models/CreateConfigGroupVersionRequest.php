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
 * CreateConfigGroupVersion request structure.
 *
 * @method string getZoneId() Obtain <p>Zone ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Zone ID.</p>
 * @method string getGroupId() Obtain <p>ID of the configuration group for which to create a new version. You can obtain the complete environment information through the environment information interface (DescribeEnvironments). The environment information contains the configuration group ID of each configuration group type.</p><p>For parameter values, see the return value <code>EnvInfos</code> of <a href="https://www.tencentcloud.com/document/api/1552/101862?from_cn_redirect=1">DescribeEnvironments</a>.</p>
 * @method void setGroupId(string $GroupId) Set <p>ID of the configuration group for which to create a new version. You can obtain the complete environment information through the environment information interface (DescribeEnvironments). The environment information contains the configuration group ID of each configuration group type.</p><p>For parameter values, see the return value <code>EnvInfos</code> of <a href="https://www.tencentcloud.com/document/api/1552/101862?from_cn_redirect=1">DescribeEnvironments</a>.</p>
 * @method string getContent() Obtain <p>Configuration content to be imported, which is required to be in the JSON format and encoded in the UTF-8 mode. For the configuration file content, refer to the example below and the <a href="https://www.tencentcloud.com/document/product/1552/125342?from_cn_redirect=1">configuration group syntax explanation</a>.</p>
 * @method void setContent(string $Content) Set <p>Configuration content to be imported, which is required to be in the JSON format and encoded in the UTF-8 mode. For the configuration file content, refer to the example below and the <a href="https://www.tencentcloud.com/document/product/1552/125342?from_cn_redirect=1">configuration group syntax explanation</a>.</p>
 * @method string getDescription() Obtain <p>Version description. You can enter up to 50 characters. This field can be used to fill in the usage scenario of this version.</p>
 * @method void setDescription(string $Description) Set <p>Version description. You can enter up to 50 characters. This field can be used to fill in the usage scenario of this version.</p>
 * @method string getSourceVersion() Obtain <p>The source version ID on which the new version is based. The new version will be derived from the configuration of this source version. This field is optional. If not specified, it defaults to the version currently in effect in the current production environment as the source version.</p><p>For reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/1552/101867?from_cn_redirect=1">CreateConfigGroupVersion</a> return value <code>VersionId</code></li><li><a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></li></ul>
 * @method void setSourceVersion(string $SourceVersion) Set <p>The source version ID on which the new version is based. The new version will be derived from the configuration of this source version. This field is optional. If not specified, it defaults to the version currently in effect in the current production environment as the source version.</p><p>For reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/1552/101867?from_cn_redirect=1">CreateConfigGroupVersion</a> return value <code>VersionId</code></li><li><a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></li></ul>
 */
class CreateConfigGroupVersionRequest extends AbstractModel
{
    /**
     * @var string <p>Zone ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>ID of the configuration group for which to create a new version. You can obtain the complete environment information through the environment information interface (DescribeEnvironments). The environment information contains the configuration group ID of each configuration group type.</p><p>For parameter values, see the return value <code>EnvInfos</code> of <a href="https://www.tencentcloud.com/document/api/1552/101862?from_cn_redirect=1">DescribeEnvironments</a>.</p>
     */
    public $GroupId;

    /**
     * @var string <p>Configuration content to be imported, which is required to be in the JSON format and encoded in the UTF-8 mode. For the configuration file content, refer to the example below and the <a href="https://www.tencentcloud.com/document/product/1552/125342?from_cn_redirect=1">configuration group syntax explanation</a>.</p>
     */
    public $Content;

    /**
     * @var string <p>Version description. You can enter up to 50 characters. This field can be used to fill in the usage scenario of this version.</p>
     */
    public $Description;

    /**
     * @var string <p>The source version ID on which the new version is based. The new version will be derived from the configuration of this source version. This field is optional. If not specified, it defaults to the version currently in effect in the current production environment as the source version.</p><p>For reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/1552/101867?from_cn_redirect=1">CreateConfigGroupVersion</a> return value <code>VersionId</code></li><li><a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></li></ul>
     */
    public $SourceVersion;

    /**
     * @param string $ZoneId <p>Zone ID.</p>
     * @param string $GroupId <p>ID of the configuration group for which to create a new version. You can obtain the complete environment information through the environment information interface (DescribeEnvironments). The environment information contains the configuration group ID of each configuration group type.</p><p>For parameter values, see the return value <code>EnvInfos</code> of <a href="https://www.tencentcloud.com/document/api/1552/101862?from_cn_redirect=1">DescribeEnvironments</a>.</p>
     * @param string $Content <p>Configuration content to be imported, which is required to be in the JSON format and encoded in the UTF-8 mode. For the configuration file content, refer to the example below and the <a href="https://www.tencentcloud.com/document/product/1552/125342?from_cn_redirect=1">configuration group syntax explanation</a>.</p>
     * @param string $Description <p>Version description. You can enter up to 50 characters. This field can be used to fill in the usage scenario of this version.</p>
     * @param string $SourceVersion <p>The source version ID on which the new version is based. The new version will be derived from the configuration of this source version. This field is optional. If not specified, it defaults to the version currently in effect in the current production environment as the source version.</p><p>For reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/1552/101867?from_cn_redirect=1">CreateConfigGroupVersion</a> return value <code>VersionId</code></li><li><a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></li></ul>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SourceVersion",$param) and $param["SourceVersion"] !== null) {
            $this->SourceVersion = $param["SourceVersion"];
        }
    }
}

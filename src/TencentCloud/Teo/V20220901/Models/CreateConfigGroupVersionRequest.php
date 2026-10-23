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
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getGroupId() Obtain <p>Configuration group ID for the new version. You can obtain the complete environment information through the DescribeEnvironments interface. The environment information contains the configuration group ID for each configuration group type.</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/1552/101862?from_cn_redirect=1">DescribeEnvironments</a> return value <code>EnvInfos</code></p>
 * @method void setGroupId(string $GroupId) Set <p>Configuration group ID for the new version. You can obtain the complete environment information through the DescribeEnvironments interface. The environment information contains the configuration group ID for each configuration group type.</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/1552/101862?from_cn_redirect=1">DescribeEnvironments</a> return value <code>EnvInfos</code></p>
 * @method string getContent() Obtain <p>Configuration content to be imported. Use JSON format and encode in UTF-8 mode. Refer to the example below and the <a href="https://www.tencentcloud.com/document/product/1552/125342?from_cn_redirect=1">configuration group syntax explanation</a> for the configuration file content.</p>
 * @method void setContent(string $Content) Set <p>Configuration content to be imported. Use JSON format and encode in UTF-8 mode. Refer to the example below and the <a href="https://www.tencentcloud.com/document/product/1552/125342?from_cn_redirect=1">configuration group syntax explanation</a> for the configuration file content.</p>
 * @method string getDescription() Obtain <p>Version description, enter a maximum length of 50 characters, can be used to fill in the usage scenario of this version.</p>
 * @method void setDescription(string $Description) Set <p>Version description, enter a maximum length of 50 characters, can be used to fill in the usage scenario of this version.</p>
 * @method string getSourceVersion() Obtain <p>Source version ID on which the new version is based. The new version will be created as a derivative based on the configuration of this source version. This field is optional. If not provided, it defaults to the version currently taking effect in the production environment as the source version.</p><p>For reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/1552/101867?from_cn_redirect=1">CreateConfigGroupVersion</a> return value <code>VersionId</code></li><li><a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></li></ul>
 * @method void setSourceVersion(string $SourceVersion) Set <p>Source version ID on which the new version is based. The new version will be created as a derivative based on the configuration of this source version. This field is optional. If not provided, it defaults to the version currently taking effect in the production environment as the source version.</p><p>For reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/1552/101867?from_cn_redirect=1">CreateConfigGroupVersion</a> return value <code>VersionId</code></li><li><a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></li></ul>
 */
class CreateConfigGroupVersionRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Configuration group ID for the new version. You can obtain the complete environment information through the DescribeEnvironments interface. The environment information contains the configuration group ID for each configuration group type.</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/1552/101862?from_cn_redirect=1">DescribeEnvironments</a> return value <code>EnvInfos</code></p>
     */
    public $GroupId;

    /**
     * @var string <p>Configuration content to be imported. Use JSON format and encode in UTF-8 mode. Refer to the example below and the <a href="https://www.tencentcloud.com/document/product/1552/125342?from_cn_redirect=1">configuration group syntax explanation</a> for the configuration file content.</p>
     */
    public $Content;

    /**
     * @var string <p>Version description, enter a maximum length of 50 characters, can be used to fill in the usage scenario of this version.</p>
     */
    public $Description;

    /**
     * @var string <p>Source version ID on which the new version is based. The new version will be created as a derivative based on the configuration of this source version. This field is optional. If not provided, it defaults to the version currently taking effect in the production environment as the source version.</p><p>For reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/1552/101867?from_cn_redirect=1">CreateConfigGroupVersion</a> return value <code>VersionId</code></li><li><a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></li></ul>
     */
    public $SourceVersion;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $GroupId <p>Configuration group ID for the new version. You can obtain the complete environment information through the DescribeEnvironments interface. The environment information contains the configuration group ID for each configuration group type.</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/1552/101862?from_cn_redirect=1">DescribeEnvironments</a> return value <code>EnvInfos</code></p>
     * @param string $Content <p>Configuration content to be imported. Use JSON format and encode in UTF-8 mode. Refer to the example below and the <a href="https://www.tencentcloud.com/document/product/1552/125342?from_cn_redirect=1">configuration group syntax explanation</a> for the configuration file content.</p>
     * @param string $Description <p>Version description, enter a maximum length of 50 characters, can be used to fill in the usage scenario of this version.</p>
     * @param string $SourceVersion <p>Source version ID on which the new version is based. The new version will be created as a derivative based on the configuration of this source version. This field is optional. If not provided, it defaults to the version currently taking effect in the production environment as the source version.</p><p>For reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/1552/101867?from_cn_redirect=1">CreateConfigGroupVersion</a> return value <code>VersionId</code></li><li><a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></li></ul>
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

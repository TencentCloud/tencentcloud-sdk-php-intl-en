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
 * Configuration group version information.
 *
 * @method string getVersionId() Obtain <p>Configuration group version ID, a unique resource ID assigned by EdgeOne when creating a configuration group version.</p><p>Parameter format: ver-2kplomhisdcb</p><p>For reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/1552/101867?from_cn_redirect=1">CreateConfigGroupVersion</a> return value <code>VersionId</code></li><li><a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></li></ul>
 * @method void setVersionId(string $VersionId) Set <p>Configuration group version ID, a unique resource ID assigned by EdgeOne when creating a configuration group version.</p><p>Parameter format: ver-2kplomhisdcb</p><p>For reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/1552/101867?from_cn_redirect=1">CreateConfigGroupVersion</a> return value <code>VersionId</code></li><li><a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></li></ul>
 * @method string getVersionNumber() Obtain <p>Configuration group version number. This parameter is only for display. Each time a new version is created for the configuration group, the version number increases by one. The initial version number is "0".</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></p>
 * @method void setVersionNumber(string $VersionNumber) Set <p>Configuration group version number. This parameter is only for display. Each time a new version is created for the configuration group, the version number increases by one. The initial version number is "0".</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></p>
 * @method string getSourceVersion() Obtain <p>The source version ID on which the configuration group version is based. Specify the source version ID when creating a configuration group version. The new version will be derived from the configuration of the source version.</p><p>Parameter format: ver-2kplomhisdcb</p><p>Parameter values for reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/1552/101867?from_cn_redirect=1">CreateConfigGroupVersion</a> return value <code>VersionId</code></li><li><a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></li></ul>
 * @method void setSourceVersion(string $SourceVersion) Set <p>The source version ID on which the configuration group version is based. Specify the source version ID when creating a configuration group version. The new version will be derived from the configuration of the source version.</p><p>Parameter format: ver-2kplomhisdcb</p><p>Parameter values for reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/1552/101867?from_cn_redirect=1">CreateConfigGroupVersion</a> return value <code>VersionId</code></li><li><a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></li></ul>
 * @method string getGroupType() Obtain <p>Configuration group type to which the version belongs.</p><p>Enumeration values:</p><ul><li>l7_acceleration: layer-7 acceleration configuration group</li><li>edge_functions: edge function configuration group</li><li>web_security: web protection configuration group</li></ul>
 * @method void setGroupType(string $GroupType) Set <p>Configuration group type to which the version belongs.</p><p>Enumeration values:</p><ul><li>l7_acceleration: layer-7 acceleration configuration group</li><li>edge_functions: edge function configuration group</li><li>web_security: web protection configuration group</li></ul>
 * @method string getGroupId() Obtain <p>ID of the configuration group to which the version belongs.</p><p>Parameter format: cg-2kplomhisdcb</p>
 * @method void setGroupId(string $GroupId) Set <p>ID of the configuration group to which the version belongs.</p><p>Parameter format: cg-2kplomhisdcb</p>
 * @method string getDescription() Obtain <p>Version description.</p>
 * @method void setDescription(string $Description) Set <p>Version description.</p>
 * @method string getStatus() Obtain <p>Version effective status.</p><p>Enumeration values:</p><ul><li>creating: version creating</li><li>inactive: version not in effect</li><li>active: version effective</li></ul>
 * @method void setStatus(string $Status) Set <p>Version effective status.</p><p>Enumeration values:</p><ul><li>creating: version creating</li><li>inactive: version not in effect</li><li>active: version effective</li></ul>
 * @method string getCreateTime() Obtain <p>Version creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Version creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.</p>
 */
class ConfigGroupVersionInfo extends AbstractModel
{
    /**
     * @var string <p>Configuration group version ID, a unique resource ID assigned by EdgeOne when creating a configuration group version.</p><p>Parameter format: ver-2kplomhisdcb</p><p>For reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/1552/101867?from_cn_redirect=1">CreateConfigGroupVersion</a> return value <code>VersionId</code></li><li><a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></li></ul>
     */
    public $VersionId;

    /**
     * @var string <p>Configuration group version number. This parameter is only for display. Each time a new version is created for the configuration group, the version number increases by one. The initial version number is "0".</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></p>
     */
    public $VersionNumber;

    /**
     * @var string <p>The source version ID on which the configuration group version is based. Specify the source version ID when creating a configuration group version. The new version will be derived from the configuration of the source version.</p><p>Parameter format: ver-2kplomhisdcb</p><p>Parameter values for reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/1552/101867?from_cn_redirect=1">CreateConfigGroupVersion</a> return value <code>VersionId</code></li><li><a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></li></ul>
     */
    public $SourceVersion;

    /**
     * @var string <p>Configuration group type to which the version belongs.</p><p>Enumeration values:</p><ul><li>l7_acceleration: layer-7 acceleration configuration group</li><li>edge_functions: edge function configuration group</li><li>web_security: web protection configuration group</li></ul>
     */
    public $GroupType;

    /**
     * @var string <p>ID of the configuration group to which the version belongs.</p><p>Parameter format: cg-2kplomhisdcb</p>
     */
    public $GroupId;

    /**
     * @var string <p>Version description.</p>
     */
    public $Description;

    /**
     * @var string <p>Version effective status.</p><p>Enumeration values:</p><ul><li>creating: version creating</li><li>inactive: version not in effect</li><li>active: version effective</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Version creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.</p>
     */
    public $CreateTime;

    /**
     * @param string $VersionId <p>Configuration group version ID, a unique resource ID assigned by EdgeOne when creating a configuration group version.</p><p>Parameter format: ver-2kplomhisdcb</p><p>For reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/1552/101867?from_cn_redirect=1">CreateConfigGroupVersion</a> return value <code>VersionId</code></li><li><a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></li></ul>
     * @param string $VersionNumber <p>Configuration group version number. This parameter is only for display. Each time a new version is created for the configuration group, the version number increases by one. The initial version number is "0".</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></p>
     * @param string $SourceVersion <p>The source version ID on which the configuration group version is based. Specify the source version ID when creating a configuration group version. The new version will be derived from the configuration of the source version.</p><p>Parameter format: ver-2kplomhisdcb</p><p>Parameter values for reference:</p><ul><li><a href="https://www.tencentcloud.com/document/api/1552/101867?from_cn_redirect=1">CreateConfigGroupVersion</a> return value <code>VersionId</code></li><li><a href="https://www.tencentcloud.com/document/api/1552/101864?from_cn_redirect=1">DescribeConfigGroupVersions</a> return value <code>ConfigGroupVersionInfos</code></li></ul>
     * @param string $GroupType <p>Configuration group type to which the version belongs.</p><p>Enumeration values:</p><ul><li>l7_acceleration: layer-7 acceleration configuration group</li><li>edge_functions: edge function configuration group</li><li>web_security: web protection configuration group</li></ul>
     * @param string $GroupId <p>ID of the configuration group to which the version belongs.</p><p>Parameter format: cg-2kplomhisdcb</p>
     * @param string $Description <p>Version description.</p>
     * @param string $Status <p>Version effective status.</p><p>Enumeration values:</p><ul><li>creating: version creating</li><li>inactive: version not in effect</li><li>active: version effective</li></ul>
     * @param string $CreateTime <p>Version creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.</p>
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("VersionNumber",$param) and $param["VersionNumber"] !== null) {
            $this->VersionNumber = $param["VersionNumber"];
        }

        if (array_key_exists("SourceVersion",$param) and $param["SourceVersion"] !== null) {
            $this->SourceVersion = $param["SourceVersion"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}

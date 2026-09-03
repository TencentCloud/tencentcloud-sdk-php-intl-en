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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data configuration.
 *
 * @method string getMappingPath() Obtain Mapping path.
 * @method void setMappingPath(string $MappingPath) Set Mapping path.
 * @method string getDataSourceUsage() Obtain Storage purpose.
Valid values: BUILTIN_CODE, BUILTIN_DATA, BUILTIN_MODEL, USER_DATA, USER_CODE, USER_MODEL, OUTPUT, and OTHER.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataSourceUsage(string $DataSourceUsage) Set Storage purpose.
Valid values: BUILTIN_CODE, BUILTIN_DATA, BUILTIN_MODEL, USER_DATA, USER_CODE, USER_MODEL, OUTPUT, and OTHER.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataSourceType() Obtain DATASET, COS, CFS, CFSTurbo, GooseFSx, HDFS, and WEDATA_HDFS
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataSourceType(string $DataSourceType) Set DATASET, COS, CFS, CFSTurbo, GooseFSx, HDFS, and WEDATA_HDFS
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DataSetConfig getDataSetSource() Obtain Data from the data set.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataSetSource(DataSetConfig $DataSetSource) Set Data from the data set.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CosPathInfo getCOSSource() Obtain Data from COS.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCOSSource(CosPathInfo $COSSource) Set Data from COS.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CFSConfig getCFSSource() Obtain Data from CFS.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCFSSource(CFSConfig $CFSSource) Set Data from CFS.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method HDFSConfig getHDFSSource() Obtain Data from HDFS.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHDFSSource(HDFSConfig $HDFSSource) Set Data from HDFS.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method GooseFS getGooseFSSource() Obtain GooseFS data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGooseFSSource(GooseFS $GooseFSSource) Set GooseFS data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CFSTurbo getCFSTurboSource() Obtain TurboFS data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCFSTurboSource(CFSTurbo $CFSTurboSource) Set TurboFS data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LocalDisk getLocalDiskSource() Obtain Information from local disks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocalDiskSource(LocalDisk $LocalDiskSource) Set Information from local disks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CBSConfig getCBSSource() Obtain CBS configuration information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCBSSource(CBSConfig $CBSSource) Set CBS configuration information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method HostPath getHostPathSource() Obtain Host path information.
 * @method void setHostPathSource(HostPath $HostPathSource) Set Host path information.
 * @method PublicDataSourceFS getPublicDataSource() Obtain 
 * @method void setPublicDataSource(PublicDataSourceFS $PublicDataSource) Set 
 */
class DataConfig extends AbstractModel
{
    /**
     * @var string Mapping path.
     */
    public $MappingPath;

    /**
     * @var string Storage purpose.
Valid values: BUILTIN_CODE, BUILTIN_DATA, BUILTIN_MODEL, USER_DATA, USER_CODE, USER_MODEL, OUTPUT, and OTHER.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataSourceUsage;

    /**
     * @var string DATASET, COS, CFS, CFSTurbo, GooseFSx, HDFS, and WEDATA_HDFS
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataSourceType;

    /**
     * @var DataSetConfig Data from the data set.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataSetSource;

    /**
     * @var CosPathInfo Data from COS.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $COSSource;

    /**
     * @var CFSConfig Data from CFS.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CFSSource;

    /**
     * @var HDFSConfig Data from HDFS.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HDFSSource;

    /**
     * @var GooseFS GooseFS data.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GooseFSSource;

    /**
     * @var CFSTurbo TurboFS data.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CFSTurboSource;

    /**
     * @var LocalDisk Information from local disks.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LocalDiskSource;

    /**
     * @var CBSConfig CBS configuration information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CBSSource;

    /**
     * @var HostPath Host path information.
     */
    public $HostPathSource;

    /**
     * @var PublicDataSourceFS 
     */
    public $PublicDataSource;

    /**
     * @param string $MappingPath Mapping path.
     * @param string $DataSourceUsage Storage purpose.
Valid values: BUILTIN_CODE, BUILTIN_DATA, BUILTIN_MODEL, USER_DATA, USER_CODE, USER_MODEL, OUTPUT, and OTHER.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataSourceType DATASET, COS, CFS, CFSTurbo, GooseFSx, HDFS, and WEDATA_HDFS
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DataSetConfig $DataSetSource Data from the data set.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CosPathInfo $COSSource Data from COS.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CFSConfig $CFSSource Data from CFS.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param HDFSConfig $HDFSSource Data from HDFS.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param GooseFS $GooseFSSource GooseFS data.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CFSTurbo $CFSTurboSource TurboFS data.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LocalDisk $LocalDiskSource Information from local disks.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CBSConfig $CBSSource CBS configuration information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param HostPath $HostPathSource Host path information.
     * @param PublicDataSourceFS $PublicDataSource 
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
        if (array_key_exists("MappingPath",$param) and $param["MappingPath"] !== null) {
            $this->MappingPath = $param["MappingPath"];
        }

        if (array_key_exists("DataSourceUsage",$param) and $param["DataSourceUsage"] !== null) {
            $this->DataSourceUsage = $param["DataSourceUsage"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("DataSetSource",$param) and $param["DataSetSource"] !== null) {
            $this->DataSetSource = new DataSetConfig();
            $this->DataSetSource->deserialize($param["DataSetSource"]);
        }

        if (array_key_exists("COSSource",$param) and $param["COSSource"] !== null) {
            $this->COSSource = new CosPathInfo();
            $this->COSSource->deserialize($param["COSSource"]);
        }

        if (array_key_exists("CFSSource",$param) and $param["CFSSource"] !== null) {
            $this->CFSSource = new CFSConfig();
            $this->CFSSource->deserialize($param["CFSSource"]);
        }

        if (array_key_exists("HDFSSource",$param) and $param["HDFSSource"] !== null) {
            $this->HDFSSource = new HDFSConfig();
            $this->HDFSSource->deserialize($param["HDFSSource"]);
        }

        if (array_key_exists("GooseFSSource",$param) and $param["GooseFSSource"] !== null) {
            $this->GooseFSSource = new GooseFS();
            $this->GooseFSSource->deserialize($param["GooseFSSource"]);
        }

        if (array_key_exists("CFSTurboSource",$param) and $param["CFSTurboSource"] !== null) {
            $this->CFSTurboSource = new CFSTurbo();
            $this->CFSTurboSource->deserialize($param["CFSTurboSource"]);
        }

        if (array_key_exists("LocalDiskSource",$param) and $param["LocalDiskSource"] !== null) {
            $this->LocalDiskSource = new LocalDisk();
            $this->LocalDiskSource->deserialize($param["LocalDiskSource"]);
        }

        if (array_key_exists("CBSSource",$param) and $param["CBSSource"] !== null) {
            $this->CBSSource = new CBSConfig();
            $this->CBSSource->deserialize($param["CBSSource"]);
        }

        if (array_key_exists("HostPathSource",$param) and $param["HostPathSource"] !== null) {
            $this->HostPathSource = new HostPath();
            $this->HostPathSource->deserialize($param["HostPathSource"]);
        }

        if (array_key_exists("PublicDataSource",$param) and $param["PublicDataSource"] !== null) {
            $this->PublicDataSource = new PublicDataSourceFS();
            $this->PublicDataSource->deserialize($param["PublicDataSource"]);
        }
    }
}

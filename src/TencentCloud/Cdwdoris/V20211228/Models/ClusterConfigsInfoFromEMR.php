<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * It is used to return configuration files and content in XML format, as well as other information related to the configuration files.
 *
 * @method string getFileName() Obtain Configuration file's name
 * @method void setFileName(string $FileName) Set Configuration file's name
 * @method string getFileConf() Obtain Related attribute information corresponding to the configuration files
 * @method void setFileConf(string $FileConf) Set Related attribute information corresponding to the configuration files
 * @method string getKeyConf() Obtain Other attribute information corresponding to the configuration files
 * @method void setKeyConf(string $KeyConf) Set Other attribute information corresponding to the configuration files
 * @method string getOriParam() Obtain Contents of the configuration files, base64 encoded
 * @method void setOriParam(string $OriParam) Set Contents of the configuration files, base64 encoded
 * @method integer getNeedRestart() Obtain This is used to indicate whether the current configuration file has been modified without a restart, and reminds the user that a restart is needed.
 * @method void setNeedRestart(integer $NeedRestart) Set This is used to indicate whether the current configuration file has been modified without a restart, and reminds the user that a restart is needed.
 * @method string getFilePath() Obtain Configuration file path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFilePath(string $FilePath) Set Configuration file path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileKeyValues() Obtain kv value of a configuration file
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileKeyValues(string $FileKeyValues) Set kv value of a configuration file
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getFileKeyValuesNew() Obtain kv value of a configuration file
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileKeyValuesNew(array $FileKeyValuesNew) Set kv value of a configuration file
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ClusterConfigsInfoFromEMR extends AbstractModel
{
    /**
     * @var string Configuration file's name
     */
    public $FileName;

    /**
     * @var string Related attribute information corresponding to the configuration files
     */
    public $FileConf;

    /**
     * @var string Other attribute information corresponding to the configuration files
     */
    public $KeyConf;

    /**
     * @var string Contents of the configuration files, base64 encoded
     */
    public $OriParam;

    /**
     * @var integer This is used to indicate whether the current configuration file has been modified without a restart, and reminds the user that a restart is needed.
     */
    public $NeedRestart;

    /**
     * @var string Configuration file path
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FilePath;

    /**
     * @var string kv value of a configuration file
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $FileKeyValues;

    /**
     * @var array kv value of a configuration file
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileKeyValuesNew;

    /**
     * @param string $FileName Configuration file's name
     * @param string $FileConf Related attribute information corresponding to the configuration files
     * @param string $KeyConf Other attribute information corresponding to the configuration files
     * @param string $OriParam Contents of the configuration files, base64 encoded
     * @param integer $NeedRestart This is used to indicate whether the current configuration file has been modified without a restart, and reminds the user that a restart is needed.
     * @param string $FilePath Configuration file path
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileKeyValues kv value of a configuration file
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $FileKeyValuesNew kv value of a configuration file
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileConf",$param) and $param["FileConf"] !== null) {
            $this->FileConf = $param["FileConf"];
        }

        if (array_key_exists("KeyConf",$param) and $param["KeyConf"] !== null) {
            $this->KeyConf = $param["KeyConf"];
        }

        if (array_key_exists("OriParam",$param) and $param["OriParam"] !== null) {
            $this->OriParam = $param["OriParam"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileKeyValues",$param) and $param["FileKeyValues"] !== null) {
            $this->FileKeyValues = $param["FileKeyValues"];
        }

        if (array_key_exists("FileKeyValuesNew",$param) and $param["FileKeyValuesNew"] !== null) {
            $this->FileKeyValuesNew = [];
            foreach ($param["FileKeyValuesNew"] as $key => $value){
                $obj = new ConfigKeyValue();
                $obj->deserialize($value);
                array_push($this->FileKeyValuesNew, $obj);
            }
        }
    }
}

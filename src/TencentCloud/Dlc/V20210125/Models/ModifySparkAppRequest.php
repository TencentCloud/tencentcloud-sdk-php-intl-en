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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySparkApp request structure.
 *
 * @method string getAppName() Obtain Spark application name
 * @method void setAppName(string $AppName) Set Spark application name
 * @method integer getAppType() Obtain 1: Spark JAR application; 2: Spark streaming application
 * @method void setAppType(integer $AppType) Set 1: Spark JAR application; 2: Spark streaming application
 * @method string getDataEngine() Obtain The data engine executing the Spark job
 * @method void setDataEngine(string $DataEngine) Set The data engine executing the Spark job
 * @method string getAppFile() Obtain Execution entry of the Spark application
 * @method void setAppFile(string $AppFile) Set Execution entry of the Spark application
 * @method integer getRoleArn() Obtain Execution role ID of the Spark job
 * @method void setRoleArn(integer $RoleArn) Set Execution role ID of the Spark job
 * @method string getAppDriverSize() Obtain Driver resource specification of the Spark job. Valid values: `small`, `medium`, `large`, `xlarge`.
 * @method void setAppDriverSize(string $AppDriverSize) Set Driver resource specification of the Spark job. Valid values: `small`, `medium`, `large`, `xlarge`.
 * @method string getAppExecutorSize() Obtain Executor resource specification of the Spark job. Valid values: `small`, `medium`, `large`, `xlarge`.
 * @method void setAppExecutorSize(string $AppExecutorSize) Set Executor resource specification of the Spark job. Valid values: `small`, `medium`, `large`, `xlarge`.
 * @method integer getAppExecutorNums() Obtain Number of Spark job executors
 * @method void setAppExecutorNums(integer $AppExecutorNums) Set Number of Spark job executors
 * @method string getSparkAppId() Obtain Spark application ID
 * @method void setSparkAppId(string $SparkAppId) Set Spark application ID
 * @method string getEni() Obtain This field has been disused. Use the `Datasource` field instead.
 * @method void setEni(string $Eni) Set This field has been disused. Use the `Datasource` field instead.
 * @method string getIsLocal() Obtain Whether it is uploaded locally. Valid values: `cos`, `lakefs`.
 * @method void setIsLocal(string $IsLocal) Set Whether it is uploaded locally. Valid values: `cos`, `lakefs`.
 * @method string getMainClass() Obtain Main class of the Spark JAR job during execution
 * @method void setMainClass(string $MainClass) Set Main class of the Spark JAR job during execution
 * @method string getAppConf() Obtain Spark configurations separated by line break
 * @method void setAppConf(string $AppConf) Set Spark configurations separated by line break
 * @method string getIsLocalJars() Obtain JAR resource dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
 * @method void setIsLocalJars(string $IsLocalJars) Set JAR resource dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
 * @method string getAppJars() Obtain Dependency JAR packages of the Spark JAR job separated by comma
 * @method void setAppJars(string $AppJars) Set Dependency JAR packages of the Spark JAR job separated by comma
 * @method string getIsLocalFiles() Obtain File resource dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
 * @method void setIsLocalFiles(string $IsLocalFiles) Set File resource dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
 * @method string getAppFiles() Obtain Dependency resources of the Spark job separated by comma
 * @method void setAppFiles(string $AppFiles) Set Dependency resources of the Spark job separated by comma
 * @method string getIsLocalPythonFiles() Obtain PySpark: Dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
 * @method void setIsLocalPythonFiles(string $IsLocalPythonFiles) Set PySpark: Dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
 * @method string getAppPythonFiles() Obtain PySpark: Python dependency, which can be in .py, .zip, or .egg format. Multiple files should be separated by comma.
 * @method void setAppPythonFiles(string $AppPythonFiles) Set PySpark: Python dependency, which can be in .py, .zip, or .egg format. Multiple files should be separated by comma.
 * @method string getCmdArgs() Obtain Command line parameters of the Spark job
 * @method void setCmdArgs(string $CmdArgs) Set Command line parameters of the Spark job
 * @method integer getMaxRetries() Obtain This parameter takes effect only for Spark flow tasks.
 * @method void setMaxRetries(integer $MaxRetries) Set This parameter takes effect only for Spark flow tasks.
 * @method string getDataSource() Obtain Data source name
 * @method void setDataSource(string $DataSource) Set Data source name
 * @method string getIsLocalArchives() Obtain Archives: Dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
 * @method void setIsLocalArchives(string $IsLocalArchives) Set Archives: Dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
 * @method string getAppArchives() Obtain Archives: Dependency resources
 * @method void setAppArchives(string $AppArchives) Set Archives: Dependency resources
 * @method string getSparkImage() Obtain The Spark image version.
 * @method void setSparkImage(string $SparkImage) Set The Spark image version.
 * @method string getSparkImageVersion() Obtain The Spark image version name.
 * @method void setSparkImageVersion(string $SparkImageVersion) Set The Spark image version name.
 * @method integer getAppExecutorMaxNumbers() Obtain The specified executor count (max), which defaults to 1. This parameter applies if the "Dynamic" mode is selected. If the "Dynamic" mode is not selected, the executor count is equal to `AppExecutorNums`.
 * @method void setAppExecutorMaxNumbers(integer $AppExecutorMaxNumbers) Set The specified executor count (max), which defaults to 1. This parameter applies if the "Dynamic" mode is selected. If the "Dynamic" mode is not selected, the executor count is equal to `AppExecutorNums`.
 * @method string getSessionId() Obtain The associated Data Lake Compute query script.
 * @method void setSessionId(string $SessionId) Set The associated Data Lake Compute query script.
 */
class ModifySparkAppRequest extends AbstractModel
{
    /**
     * @var string Spark application name
     */
    public $AppName;

    /**
     * @var integer 1: Spark JAR application; 2: Spark streaming application
     */
    public $AppType;

    /**
     * @var string The data engine executing the Spark job
     */
    public $DataEngine;

    /**
     * @var string Execution entry of the Spark application
     */
    public $AppFile;

    /**
     * @var integer Execution role ID of the Spark job
     */
    public $RoleArn;

    /**
     * @var string Driver resource specification of the Spark job. Valid values: `small`, `medium`, `large`, `xlarge`.
     */
    public $AppDriverSize;

    /**
     * @var string Executor resource specification of the Spark job. Valid values: `small`, `medium`, `large`, `xlarge`.
     */
    public $AppExecutorSize;

    /**
     * @var integer Number of Spark job executors
     */
    public $AppExecutorNums;

    /**
     * @var string Spark application ID
     */
    public $SparkAppId;

    /**
     * @var string This field has been disused. Use the `Datasource` field instead.
     */
    public $Eni;

    /**
     * @var string Whether it is uploaded locally. Valid values: `cos`, `lakefs`.
     */
    public $IsLocal;

    /**
     * @var string Main class of the Spark JAR job during execution
     */
    public $MainClass;

    /**
     * @var string Spark configurations separated by line break
     */
    public $AppConf;

    /**
     * @var string JAR resource dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
     */
    public $IsLocalJars;

    /**
     * @var string Dependency JAR packages of the Spark JAR job separated by comma
     */
    public $AppJars;

    /**
     * @var string File resource dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
     */
    public $IsLocalFiles;

    /**
     * @var string Dependency resources of the Spark job separated by comma
     */
    public $AppFiles;

    /**
     * @var string PySpark: Dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
     */
    public $IsLocalPythonFiles;

    /**
     * @var string PySpark: Python dependency, which can be in .py, .zip, or .egg format. Multiple files should be separated by comma.
     */
    public $AppPythonFiles;

    /**
     * @var string Command line parameters of the Spark job
     */
    public $CmdArgs;

    /**
     * @var integer This parameter takes effect only for Spark flow tasks.
     */
    public $MaxRetries;

    /**
     * @var string Data source name
     */
    public $DataSource;

    /**
     * @var string Archives: Dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
     */
    public $IsLocalArchives;

    /**
     * @var string Archives: Dependency resources
     */
    public $AppArchives;

    /**
     * @var string The Spark image version.
     */
    public $SparkImage;

    /**
     * @var string The Spark image version name.
     */
    public $SparkImageVersion;

    /**
     * @var integer The specified executor count (max), which defaults to 1. This parameter applies if the "Dynamic" mode is selected. If the "Dynamic" mode is not selected, the executor count is equal to `AppExecutorNums`.
     */
    public $AppExecutorMaxNumbers;

    /**
     * @var string The associated Data Lake Compute query script.
     */
    public $SessionId;

    /**
     * @param string $AppName Spark application name
     * @param integer $AppType 1: Spark JAR application; 2: Spark streaming application
     * @param string $DataEngine The data engine executing the Spark job
     * @param string $AppFile Execution entry of the Spark application
     * @param integer $RoleArn Execution role ID of the Spark job
     * @param string $AppDriverSize Driver resource specification of the Spark job. Valid values: `small`, `medium`, `large`, `xlarge`.
     * @param string $AppExecutorSize Executor resource specification of the Spark job. Valid values: `small`, `medium`, `large`, `xlarge`.
     * @param integer $AppExecutorNums Number of Spark job executors
     * @param string $SparkAppId Spark application ID
     * @param string $Eni This field has been disused. Use the `Datasource` field instead.
     * @param string $IsLocal Whether it is uploaded locally. Valid values: `cos`, `lakefs`.
     * @param string $MainClass Main class of the Spark JAR job during execution
     * @param string $AppConf Spark configurations separated by line break
     * @param string $IsLocalJars JAR resource dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
     * @param string $AppJars Dependency JAR packages of the Spark JAR job separated by comma
     * @param string $IsLocalFiles File resource dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
     * @param string $AppFiles Dependency resources of the Spark job separated by comma
     * @param string $IsLocalPythonFiles PySpark: Dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
     * @param string $AppPythonFiles PySpark: Python dependency, which can be in .py, .zip, or .egg format. Multiple files should be separated by comma.
     * @param string $CmdArgs Command line parameters of the Spark job
     * @param integer $MaxRetries This parameter takes effect only for Spark flow tasks.
     * @param string $DataSource Data source name
     * @param string $IsLocalArchives Archives: Dependency upload method. 1: cos; 2: lakefs (this method needs to be used in the console but cannot be called through APIs).
     * @param string $AppArchives Archives: Dependency resources
     * @param string $SparkImage The Spark image version.
     * @param string $SparkImageVersion The Spark image version name.
     * @param integer $AppExecutorMaxNumbers The specified executor count (max), which defaults to 1. This parameter applies if the "Dynamic" mode is selected. If the "Dynamic" mode is not selected, the executor count is equal to `AppExecutorNums`.
     * @param string $SessionId The associated Data Lake Compute query script.
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("DataEngine",$param) and $param["DataEngine"] !== null) {
            $this->DataEngine = $param["DataEngine"];
        }

        if (array_key_exists("AppFile",$param) and $param["AppFile"] !== null) {
            $this->AppFile = $param["AppFile"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("AppDriverSize",$param) and $param["AppDriverSize"] !== null) {
            $this->AppDriverSize = $param["AppDriverSize"];
        }

        if (array_key_exists("AppExecutorSize",$param) and $param["AppExecutorSize"] !== null) {
            $this->AppExecutorSize = $param["AppExecutorSize"];
        }

        if (array_key_exists("AppExecutorNums",$param) and $param["AppExecutorNums"] !== null) {
            $this->AppExecutorNums = $param["AppExecutorNums"];
        }

        if (array_key_exists("SparkAppId",$param) and $param["SparkAppId"] !== null) {
            $this->SparkAppId = $param["SparkAppId"];
        }

        if (array_key_exists("Eni",$param) and $param["Eni"] !== null) {
            $this->Eni = $param["Eni"];
        }

        if (array_key_exists("IsLocal",$param) and $param["IsLocal"] !== null) {
            $this->IsLocal = $param["IsLocal"];
        }

        if (array_key_exists("MainClass",$param) and $param["MainClass"] !== null) {
            $this->MainClass = $param["MainClass"];
        }

        if (array_key_exists("AppConf",$param) and $param["AppConf"] !== null) {
            $this->AppConf = $param["AppConf"];
        }

        if (array_key_exists("IsLocalJars",$param) and $param["IsLocalJars"] !== null) {
            $this->IsLocalJars = $param["IsLocalJars"];
        }

        if (array_key_exists("AppJars",$param) and $param["AppJars"] !== null) {
            $this->AppJars = $param["AppJars"];
        }

        if (array_key_exists("IsLocalFiles",$param) and $param["IsLocalFiles"] !== null) {
            $this->IsLocalFiles = $param["IsLocalFiles"];
        }

        if (array_key_exists("AppFiles",$param) and $param["AppFiles"] !== null) {
            $this->AppFiles = $param["AppFiles"];
        }

        if (array_key_exists("IsLocalPythonFiles",$param) and $param["IsLocalPythonFiles"] !== null) {
            $this->IsLocalPythonFiles = $param["IsLocalPythonFiles"];
        }

        if (array_key_exists("AppPythonFiles",$param) and $param["AppPythonFiles"] !== null) {
            $this->AppPythonFiles = $param["AppPythonFiles"];
        }

        if (array_key_exists("CmdArgs",$param) and $param["CmdArgs"] !== null) {
            $this->CmdArgs = $param["CmdArgs"];
        }

        if (array_key_exists("MaxRetries",$param) and $param["MaxRetries"] !== null) {
            $this->MaxRetries = $param["MaxRetries"];
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }

        if (array_key_exists("IsLocalArchives",$param) and $param["IsLocalArchives"] !== null) {
            $this->IsLocalArchives = $param["IsLocalArchives"];
        }

        if (array_key_exists("AppArchives",$param) and $param["AppArchives"] !== null) {
            $this->AppArchives = $param["AppArchives"];
        }

        if (array_key_exists("SparkImage",$param) and $param["SparkImage"] !== null) {
            $this->SparkImage = $param["SparkImage"];
        }

        if (array_key_exists("SparkImageVersion",$param) and $param["SparkImageVersion"] !== null) {
            $this->SparkImageVersion = $param["SparkImageVersion"];
        }

        if (array_key_exists("AppExecutorMaxNumbers",$param) and $param["AppExecutorMaxNumbers"] !== null) {
            $this->AppExecutorMaxNumbers = $param["AppExecutorMaxNumbers"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}

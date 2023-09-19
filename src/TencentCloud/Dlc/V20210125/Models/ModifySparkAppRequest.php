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
 * @method string getAppName() Obtain The Spark job name.
 * @method void setAppName(string $AppName) Set The Spark job name.
 * @method integer getAppType() Obtain The Spark job type. Valid values: `1` for Spark JAR job and `2` for Spark streaming job.
 * @method void setAppType(integer $AppType) Set The Spark job type. Valid values: `1` for Spark JAR job and `2` for Spark streaming job.
 * @method string getDataEngine() Obtain The data engine executing the Spark job.
 * @method void setDataEngine(string $DataEngine) Set The data engine executing the Spark job.
 * @method string getAppFile() Obtain The path of the Spark job package.
 * @method void setAppFile(string $AppFile) Set The path of the Spark job package.
 * @method integer getRoleArn() Obtain The data access policy (CAM role arn).
 * @method void setRoleArn(integer $RoleArn) Set The data access policy (CAM role arn).
 * @method string getAppDriverSize() Obtain The driver size. Valid values: `small` (default, 1 CU), `medium` (2 CUs), `large` (4 CUs), and `xlarge` (8 CUs).
 * @method void setAppDriverSize(string $AppDriverSize) Set The driver size. Valid values: `small` (default, 1 CU), `medium` (2 CUs), `large` (4 CUs), and `xlarge` (8 CUs).
 * @method string getAppExecutorSize() Obtain The executor size. Valid values: `small` (default, 1 CU), `medium` (2 CUs), `large` (4 CUs), and `xlarge` (8 CUs).
 * @method void setAppExecutorSize(string $AppExecutorSize) Set The executor size. Valid values: `small` (default, 1 CU), `medium` (2 CUs), `large` (4 CUs), and `xlarge` (8 CUs).
 * @method integer getAppExecutorNums() Obtain Number of Spark job executors
 * @method void setAppExecutorNums(integer $AppExecutorNums) Set Number of Spark job executors
 * @method string getSparkAppId() Obtain The Spark job ID.
 * @method void setSparkAppId(string $SparkAppId) Set The Spark job ID.
 * @method string getEni() Obtain This field has been disused. Use the `Datasource` field instead.
 * @method void setEni(string $Eni) Set This field has been disused. Use the `Datasource` field instead.
 * @method string getIsLocal() Obtain The source of the Spark job package. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
 * @method void setIsLocal(string $IsLocal) Set The source of the Spark job package. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
 * @method string getMainClass() Obtain The main class of the Spark job.
 * @method void setMainClass(string $MainClass) Set The main class of the Spark job.
 * @method string getAppConf() Obtain Spark configurations separated by line break
 * @method void setAppConf(string $AppConf) Set Spark configurations separated by line break
 * @method string getIsLocalJars() Obtain The source of the dependency JAR packages of the Spark job. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
 * @method void setIsLocalJars(string $IsLocalJars) Set The source of the dependency JAR packages of the Spark job. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
 * @method string getAppJars() Obtain The dependency JAR packages of the Spark JAR job (JAR packages), separated by comma.
 * @method void setAppJars(string $AppJars) Set The dependency JAR packages of the Spark JAR job (JAR packages), separated by comma.
 * @method string getIsLocalFiles() Obtain The source of the dependency files of the Spark job. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
 * @method void setIsLocalFiles(string $IsLocalFiles) Set The source of the dependency files of the Spark job. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
 * @method string getAppFiles() Obtain The dependency files of the Spark job (files other than JAR and ZIP packages), separated by comma.
 * @method void setAppFiles(string $AppFiles) Set The dependency files of the Spark job (files other than JAR and ZIP packages), separated by comma.
 * @method string getIsLocalPythonFiles() Obtain The source of the PySpark dependencies. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
 * @method void setIsLocalPythonFiles(string $IsLocalPythonFiles) Set The source of the PySpark dependencies. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
 * @method string getAppPythonFiles() Obtain The PySpark dependencies (Python files), separated by comma, with .py, .zip, and .egg formats supported.
 * @method void setAppPythonFiles(string $AppPythonFiles) Set The PySpark dependencies (Python files), separated by comma, with .py, .zip, and .egg formats supported.
 * @method string getCmdArgs() Obtain The input parameters of the Spark job, separated by comma.
 * @method void setCmdArgs(string $CmdArgs) Set The input parameters of the Spark job, separated by comma.
 * @method integer getMaxRetries() Obtain The maximum number of retries, valid for Spark streaming tasks only.
 * @method void setMaxRetries(integer $MaxRetries) Set The maximum number of retries, valid for Spark streaming tasks only.
 * @method string getDataSource() Obtain Data source name
 * @method void setDataSource(string $DataSource) Set Data source name
 * @method string getIsLocalArchives() Obtain The source of the dependency archives of the Spark job. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
 * @method void setIsLocalArchives(string $IsLocalArchives) Set The source of the dependency archives of the Spark job. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
 * @method string getAppArchives() Obtain The dependency archives of the Spark job, separated by comma, with tar.gz, .tgz, and .tar formats supported.
 * @method void setAppArchives(string $AppArchives) Set The dependency archives of the Spark job, separated by comma, with tar.gz, .tgz, and .tar formats supported.
 * @method string getSparkImage() Obtain The Spark image version.
 * @method void setSparkImage(string $SparkImage) Set The Spark image version.
 * @method string getSparkImageVersion() Obtain The Spark image version name.
 * @method void setSparkImageVersion(string $SparkImageVersion) Set The Spark image version name.
 * @method integer getAppExecutorMaxNumbers() Obtain The specified executor count (max), which defaults to 1. This parameter applies if the "Dynamic" mode is selected. If the "Dynamic" mode is not selected, the executor count is equal to `AppExecutorNums`.
 * @method void setAppExecutorMaxNumbers(integer $AppExecutorMaxNumbers) Set The specified executor count (max), which defaults to 1. This parameter applies if the "Dynamic" mode is selected. If the "Dynamic" mode is not selected, the executor count is equal to `AppExecutorNums`.
 * @method string getSessionId() Obtain The associated Data Lake Compute query script.
 * @method void setSessionId(string $SessionId) Set The associated Data Lake Compute query script.
 * @method integer getIsInherit() Obtain Whether to inherit the task resource configuration from the cluster configuration template. Valid values: `0` (default): No; `1`: Yes.
 * @method void setIsInherit(integer $IsInherit) Set Whether to inherit the task resource configuration from the cluster configuration template. Valid values: `0` (default): No; `1`: Yes.
 * @method boolean getIsSessionStarted() Obtain Whether to run the task with the session SQLs. Valid values: `false` for no and `true` for yes.
 * @method void setIsSessionStarted(boolean $IsSessionStarted) Set Whether to run the task with the session SQLs. Valid values: `false` for no and `true` for yes.
 */
class ModifySparkAppRequest extends AbstractModel
{
    /**
     * @var string The Spark job name.
     */
    public $AppName;

    /**
     * @var integer The Spark job type. Valid values: `1` for Spark JAR job and `2` for Spark streaming job.
     */
    public $AppType;

    /**
     * @var string The data engine executing the Spark job.
     */
    public $DataEngine;

    /**
     * @var string The path of the Spark job package.
     */
    public $AppFile;

    /**
     * @var integer The data access policy (CAM role arn).
     */
    public $RoleArn;

    /**
     * @var string The driver size. Valid values: `small` (default, 1 CU), `medium` (2 CUs), `large` (4 CUs), and `xlarge` (8 CUs).
     */
    public $AppDriverSize;

    /**
     * @var string The executor size. Valid values: `small` (default, 1 CU), `medium` (2 CUs), `large` (4 CUs), and `xlarge` (8 CUs).
     */
    public $AppExecutorSize;

    /**
     * @var integer Number of Spark job executors
     */
    public $AppExecutorNums;

    /**
     * @var string The Spark job ID.
     */
    public $SparkAppId;

    /**
     * @var string This field has been disused. Use the `Datasource` field instead.
     */
    public $Eni;

    /**
     * @var string The source of the Spark job package. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
     */
    public $IsLocal;

    /**
     * @var string The main class of the Spark job.
     */
    public $MainClass;

    /**
     * @var string Spark configurations separated by line break
     */
    public $AppConf;

    /**
     * @var string The source of the dependency JAR packages of the Spark job. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
     */
    public $IsLocalJars;

    /**
     * @var string The dependency JAR packages of the Spark JAR job (JAR packages), separated by comma.
     */
    public $AppJars;

    /**
     * @var string The source of the dependency files of the Spark job. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
     */
    public $IsLocalFiles;

    /**
     * @var string The dependency files of the Spark job (files other than JAR and ZIP packages), separated by comma.
     */
    public $AppFiles;

    /**
     * @var string The source of the PySpark dependencies. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
     */
    public $IsLocalPythonFiles;

    /**
     * @var string The PySpark dependencies (Python files), separated by comma, with .py, .zip, and .egg formats supported.
     */
    public $AppPythonFiles;

    /**
     * @var string The input parameters of the Spark job, separated by comma.
     */
    public $CmdArgs;

    /**
     * @var integer The maximum number of retries, valid for Spark streaming tasks only.
     */
    public $MaxRetries;

    /**
     * @var string Data source name
     */
    public $DataSource;

    /**
     * @var string The source of the dependency archives of the Spark job. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
     */
    public $IsLocalArchives;

    /**
     * @var string The dependency archives of the Spark job, separated by comma, with tar.gz, .tgz, and .tar formats supported.
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
     * @var integer Whether to inherit the task resource configuration from the cluster configuration template. Valid values: `0` (default): No; `1`: Yes.
     */
    public $IsInherit;

    /**
     * @var boolean Whether to run the task with the session SQLs. Valid values: `false` for no and `true` for yes.
     */
    public $IsSessionStarted;

    /**
     * @param string $AppName The Spark job name.
     * @param integer $AppType The Spark job type. Valid values: `1` for Spark JAR job and `2` for Spark streaming job.
     * @param string $DataEngine The data engine executing the Spark job.
     * @param string $AppFile The path of the Spark job package.
     * @param integer $RoleArn The data access policy (CAM role arn).
     * @param string $AppDriverSize The driver size. Valid values: `small` (default, 1 CU), `medium` (2 CUs), `large` (4 CUs), and `xlarge` (8 CUs).
     * @param string $AppExecutorSize The executor size. Valid values: `small` (default, 1 CU), `medium` (2 CUs), `large` (4 CUs), and `xlarge` (8 CUs).
     * @param integer $AppExecutorNums Number of Spark job executors
     * @param string $SparkAppId The Spark job ID.
     * @param string $Eni This field has been disused. Use the `Datasource` field instead.
     * @param string $IsLocal The source of the Spark job package. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
     * @param string $MainClass The main class of the Spark job.
     * @param string $AppConf Spark configurations separated by line break
     * @param string $IsLocalJars The source of the dependency JAR packages of the Spark job. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
     * @param string $AppJars The dependency JAR packages of the Spark JAR job (JAR packages), separated by comma.
     * @param string $IsLocalFiles The source of the dependency files of the Spark job. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
     * @param string $AppFiles The dependency files of the Spark job (files other than JAR and ZIP packages), separated by comma.
     * @param string $IsLocalPythonFiles The source of the PySpark dependencies. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
     * @param string $AppPythonFiles The PySpark dependencies (Python files), separated by comma, with .py, .zip, and .egg formats supported.
     * @param string $CmdArgs The input parameters of the Spark job, separated by comma.
     * @param integer $MaxRetries The maximum number of retries, valid for Spark streaming tasks only.
     * @param string $DataSource Data source name
     * @param string $IsLocalArchives The source of the dependency archives of the Spark job. Valid values: `cos` for COS and `lakefs` for the local system (for use in the console, but this method does not support direct API calls).
     * @param string $AppArchives The dependency archives of the Spark job, separated by comma, with tar.gz, .tgz, and .tar formats supported.
     * @param string $SparkImage The Spark image version.
     * @param string $SparkImageVersion The Spark image version name.
     * @param integer $AppExecutorMaxNumbers The specified executor count (max), which defaults to 1. This parameter applies if the "Dynamic" mode is selected. If the "Dynamic" mode is not selected, the executor count is equal to `AppExecutorNums`.
     * @param string $SessionId The associated Data Lake Compute query script.
     * @param integer $IsInherit Whether to inherit the task resource configuration from the cluster configuration template. Valid values: `0` (default): No; `1`: Yes.
     * @param boolean $IsSessionStarted Whether to run the task with the session SQLs. Valid values: `false` for no and `true` for yes.
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

        if (array_key_exists("IsInherit",$param) and $param["IsInherit"] !== null) {
            $this->IsInherit = $param["IsInherit"];
        }

        if (array_key_exists("IsSessionStarted",$param) and $param["IsSessionStarted"] !== null) {
            $this->IsSessionStarted = $param["IsSessionStarted"];
        }
    }
}

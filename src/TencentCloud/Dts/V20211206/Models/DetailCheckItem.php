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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specific check item in this check step
 *
 * @method string getCheckItemName() Obtain Check item name, such as source database permission check.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckItemName(string $CheckItemName) Set Check item name, such as source database permission check.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Check item details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Check item details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCheckResult() Obtain Check item result. Valid values: `pass` (pass); `failed` (failure); `warning` (pass with warning).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckResult(string $CheckResult) Set Check item result. Valid values: `pass` (pass); `failed` (failure); `warning` (pass with warning).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFailureReason() Obtain The cause of the check item failure
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailureReason(string $FailureReason) Set The cause of the check item failure
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSolution() Obtain Solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSolution(string $Solution) Set Solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getErrorLog() Obtain Execution error log
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorLog(array $ErrorLog) Set Execution error log
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getHelpDoc() Obtain URL of the detailed help document
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHelpDoc(array $HelpDoc) Set URL of the detailed help document
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSkipInfo() Obtain Prompt text for ignoring a risk
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSkipInfo(string $SkipInfo) Set Prompt text for ignoring a risk
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DetailCheckItem extends AbstractModel
{
    /**
     * @var string Check item name, such as source database permission check.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckItemName;

    /**
     * @var string Check item details
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Check item result. Valid values: `pass` (pass); `failed` (failure); `warning` (pass with warning).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckResult;

    /**
     * @var string The cause of the check item failure
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FailureReason;

    /**
     * @var string Solution
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Solution;

    /**
     * @var array Execution error log
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorLog;

    /**
     * @var array URL of the detailed help document
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HelpDoc;

    /**
     * @var string Prompt text for ignoring a risk
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SkipInfo;

    /**
     * @param string $CheckItemName Check item name, such as source database permission check.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Check item details
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CheckResult Check item result. Valid values: `pass` (pass); `failed` (failure); `warning` (pass with warning).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FailureReason The cause of the check item failure
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Solution Solution
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ErrorLog Execution error log
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $HelpDoc URL of the detailed help document
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SkipInfo Prompt text for ignoring a risk
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
        if (array_key_exists("CheckItemName",$param) and $param["CheckItemName"] !== null) {
            $this->CheckItemName = $param["CheckItemName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = $param["CheckResult"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("ErrorLog",$param) and $param["ErrorLog"] !== null) {
            $this->ErrorLog = $param["ErrorLog"];
        }

        if (array_key_exists("HelpDoc",$param) and $param["HelpDoc"] !== null) {
            $this->HelpDoc = $param["HelpDoc"];
        }

        if (array_key_exists("SkipInfo",$param) and $param["SkipInfo"] !== null) {
            $this->SkipInfo = $param["SkipInfo"];
        }
    }
}

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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * [Data structure definition] Release record
 *
 * @method boolean getCanExport() Obtain Whether it can be exported
 * @method void setCanExport(boolean $CanExport) Set Whether it can be exported
 * @method boolean getCanRollback() Obtain Whether it can be rolled back
 * @method void setCanRollback(boolean $CanRollback) Set Whether it can be rolled back
 * @method string getDescription() Obtain Release description
 * @method void setDescription(string $Description) Set Release description
 * @method integer getFailCount() Obtain Number of release failures
 * @method void setFailCount(integer $FailCount) Set Number of release failures
 * @method string getReason() Obtain Failure cause.
 * @method void setReason(string $Reason) Set Failure cause.
 * @method string getReleaseId() Obtain Release ID
 * @method void setReleaseId(string $ReleaseId) Set Release ID
 * @method string getReleaseVersion() Obtain Release version
 * @method void setReleaseVersion(string $ReleaseVersion) Set Release version
 * @method integer getStatus() Obtain Publishing status. Enumeration values: 1: To be released, 2: Releasing, 3: Released successfully, 4: Release failure, 5: Under review, 6: Review successful, 7: Review failed, 8: Release success callback processing, 9: Release suspended, 10: Appeal under review, 11: Appeal review passed, 12: Appeal review not approved
 * @method void setStatus(integer $Status) Set Publishing status. Enumeration values: 1: To be released, 2: Releasing, 3: Released successfully, 4: Release failure, 5: Under review, 6: Review successful, 7: Review failed, 8: Release success callback processing, 9: Release suspended, 10: Appeal under review, 11: Appeal review passed, 12: Appeal review not approved
 * @method string getStatusDescription() Obtain Status description.
 * @method void setStatusDescription(string $StatusDescription) Set Status description.
 * @method integer getSuccessCount() Obtain Number of successful releases
 * @method void setSuccessCount(integer $SuccessCount) Set Number of successful releases
 * @method string getUpdateTime() Obtain Update time (Unix timestamp in seconds).
 * @method void setUpdateTime(string $UpdateTime) Set Update time (Unix timestamp in seconds).
 * @method string getUpdater() Obtain Releaser
 * @method void setUpdater(string $Updater) Set Releaser
 */
class ReleaseRecord extends AbstractModel
{
    /**
     * @var boolean Whether it can be exported
     */
    public $CanExport;

    /**
     * @var boolean Whether it can be rolled back
     */
    public $CanRollback;

    /**
     * @var string Release description
     */
    public $Description;

    /**
     * @var integer Number of release failures
     */
    public $FailCount;

    /**
     * @var string Failure cause.
     */
    public $Reason;

    /**
     * @var string Release ID
     */
    public $ReleaseId;

    /**
     * @var string Release version
     */
    public $ReleaseVersion;

    /**
     * @var integer Publishing status. Enumeration values: 1: To be released, 2: Releasing, 3: Released successfully, 4: Release failure, 5: Under review, 6: Review successful, 7: Review failed, 8: Release success callback processing, 9: Release suspended, 10: Appeal under review, 11: Appeal review passed, 12: Appeal review not approved
     */
    public $Status;

    /**
     * @var string Status description.
     */
    public $StatusDescription;

    /**
     * @var integer Number of successful releases
     */
    public $SuccessCount;

    /**
     * @var string Update time (Unix timestamp in seconds).
     */
    public $UpdateTime;

    /**
     * @var string Releaser
     */
    public $Updater;

    /**
     * @param boolean $CanExport Whether it can be exported
     * @param boolean $CanRollback Whether it can be rolled back
     * @param string $Description Release description
     * @param integer $FailCount Number of release failures
     * @param string $Reason Failure cause.
     * @param string $ReleaseId Release ID
     * @param string $ReleaseVersion Release version
     * @param integer $Status Publishing status. Enumeration values: 1: To be released, 2: Releasing, 3: Released successfully, 4: Release failure, 5: Under review, 6: Review successful, 7: Review failed, 8: Release success callback processing, 9: Release suspended, 10: Appeal under review, 11: Appeal review passed, 12: Appeal review not approved
     * @param string $StatusDescription Status description.
     * @param integer $SuccessCount Number of successful releases
     * @param string $UpdateTime Update time (Unix timestamp in seconds).
     * @param string $Updater Releaser
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
        if (array_key_exists("CanExport",$param) and $param["CanExport"] !== null) {
            $this->CanExport = $param["CanExport"];
        }

        if (array_key_exists("CanRollback",$param) and $param["CanRollback"] !== null) {
            $this->CanRollback = $param["CanRollback"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("ReleaseId",$param) and $param["ReleaseId"] !== null) {
            $this->ReleaseId = $param["ReleaseId"];
        }

        if (array_key_exists("ReleaseVersion",$param) and $param["ReleaseVersion"] !== null) {
            $this->ReleaseVersion = $param["ReleaseVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDescription",$param) and $param["StatusDescription"] !== null) {
            $this->StatusDescription = $param["StatusDescription"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Updater",$param) and $param["Updater"] !== null) {
            $this->Updater = $param["Updater"];
        }
    }
}

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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Global database task information
 *
 * @method string getGdnId() Obtain Global database unique ID
 * @method void setGdnId(string $GdnId) Set Global database unique ID
 * @method string getGdnName() Obtain Unique alias of the global database
 * @method void setGdnName(string $GdnName) Set Unique alias of the global database
 * @method string getPrimaryClusterId() Obtain Primary cluster ID
 * @method void setPrimaryClusterId(string $PrimaryClusterId) Set Primary cluster ID
 * @method string getPrimaryClusterRegion() Obtain Region of the primary cluster
 * @method void setPrimaryClusterRegion(string $PrimaryClusterRegion) Set Region of the primary cluster
 * @method string getStandbyClusterRegion() Obtain From the cluster region
 * @method void setStandbyClusterRegion(string $StandbyClusterRegion) Set From the cluster region
 * @method string getStandbyClusterId() Obtain Slave cluster ID
 * @method void setStandbyClusterId(string $StandbyClusterId) Set Slave cluster ID
 * @method string getStandbyClusterName() Obtain From the cluster name
 * @method void setStandbyClusterName(string $StandbyClusterName) Set From the cluster name
 * @method string getForceSwitchGdn() Obtain Whether a forced switchover has been performed
 * @method void setForceSwitchGdn(string $ForceSwitchGdn) Set Whether a forced switchover has been performed
 * @method integer getCode() Obtain code
 * @method void setCode(integer $Code) Set code
 * @method string getMessage() Obtain Prompt message
 * @method void setMessage(string $Message) Set Prompt message
 * @method string getIsSupportForce() Obtain Whether forced switchover is supported
 * @method void setIsSupportForce(string $IsSupportForce) Set Whether forced switchover is supported
 */
class GdnTaskInfo extends AbstractModel
{
    /**
     * @var string Global database unique ID
     */
    public $GdnId;

    /**
     * @var string Unique alias of the global database
     */
    public $GdnName;

    /**
     * @var string Primary cluster ID
     */
    public $PrimaryClusterId;

    /**
     * @var string Region of the primary cluster
     */
    public $PrimaryClusterRegion;

    /**
     * @var string From the cluster region
     */
    public $StandbyClusterRegion;

    /**
     * @var string Slave cluster ID
     */
    public $StandbyClusterId;

    /**
     * @var string From the cluster name
     */
    public $StandbyClusterName;

    /**
     * @var string Whether a forced switchover has been performed
     */
    public $ForceSwitchGdn;

    /**
     * @var integer code
     */
    public $Code;

    /**
     * @var string Prompt message
     */
    public $Message;

    /**
     * @var string Whether forced switchover is supported
     */
    public $IsSupportForce;

    /**
     * @param string $GdnId Global database unique ID
     * @param string $GdnName Unique alias of the global database
     * @param string $PrimaryClusterId Primary cluster ID
     * @param string $PrimaryClusterRegion Region of the primary cluster
     * @param string $StandbyClusterRegion From the cluster region
     * @param string $StandbyClusterId Slave cluster ID
     * @param string $StandbyClusterName From the cluster name
     * @param string $ForceSwitchGdn Whether a forced switchover has been performed
     * @param integer $Code code
     * @param string $Message Prompt message
     * @param string $IsSupportForce Whether forced switchover is supported
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
        if (array_key_exists("GdnId",$param) and $param["GdnId"] !== null) {
            $this->GdnId = $param["GdnId"];
        }

        if (array_key_exists("GdnName",$param) and $param["GdnName"] !== null) {
            $this->GdnName = $param["GdnName"];
        }

        if (array_key_exists("PrimaryClusterId",$param) and $param["PrimaryClusterId"] !== null) {
            $this->PrimaryClusterId = $param["PrimaryClusterId"];
        }

        if (array_key_exists("PrimaryClusterRegion",$param) and $param["PrimaryClusterRegion"] !== null) {
            $this->PrimaryClusterRegion = $param["PrimaryClusterRegion"];
        }

        if (array_key_exists("StandbyClusterRegion",$param) and $param["StandbyClusterRegion"] !== null) {
            $this->StandbyClusterRegion = $param["StandbyClusterRegion"];
        }

        if (array_key_exists("StandbyClusterId",$param) and $param["StandbyClusterId"] !== null) {
            $this->StandbyClusterId = $param["StandbyClusterId"];
        }

        if (array_key_exists("StandbyClusterName",$param) and $param["StandbyClusterName"] !== null) {
            $this->StandbyClusterName = $param["StandbyClusterName"];
        }

        if (array_key_exists("ForceSwitchGdn",$param) and $param["ForceSwitchGdn"] !== null) {
            $this->ForceSwitchGdn = $param["ForceSwitchGdn"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("IsSupportForce",$param) and $param["IsSupportForce"] !== null) {
            $this->IsSupportForce = $param["IsSupportForce"];
        }
    }
}

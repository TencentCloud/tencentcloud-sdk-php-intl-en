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
 * Global database task info
 *
 * @method string getGdnId() Obtain Unique ID of the global database
 * @method void setGdnId(string $GdnId) Set Unique ID of the global database
 * @method string getGdnName() Obtain unique alias of the global database
 * @method void setGdnName(string $GdnName) Set unique alias of the global database
 * @method string getPrimaryClusterId() Obtain Primary Cluster ID
 * @method void setPrimaryClusterId(string $PrimaryClusterId) Set Primary Cluster ID
 * @method string getPrimaryClusterRegion() Obtain Master cluster region
 * @method void setPrimaryClusterRegion(string $PrimaryClusterRegion) Set Master cluster region
 * @method string getStandbyClusterRegion() Obtain from the cluster region
 * @method void setStandbyClusterRegion(string $StandbyClusterRegion) Set from the cluster region
 * @method string getStandbyClusterId() Obtain Slave cluster ID
 * @method void setStandbyClusterId(string $StandbyClusterId) Set Slave cluster ID
 * @method string getStandbyClusterName() Obtain From the cluster name
 * @method void setStandbyClusterName(string $StandbyClusterName) Set From the cluster name
 * @method string getForceSwitchGdn() Obtain Whether forced switchover is performed
 * @method void setForceSwitchGdn(string $ForceSwitchGdn) Set Whether forced switchover is performed
 * @method integer getCode() Obtain Return code
 * @method void setCode(integer $Code) Set Return code
 * @method string getMessage() Obtain prompt message
 * @method void setMessage(string $Message) Set prompt message
 * @method string getIsSupportForce() Obtain Whether forced switchover is supported
 * @method void setIsSupportForce(string $IsSupportForce) Set Whether forced switchover is supported
 */
class GdnTaskInfo extends AbstractModel
{
    /**
     * @var string Unique ID of the global database
     */
    public $GdnId;

    /**
     * @var string unique alias of the global database
     */
    public $GdnName;

    /**
     * @var string Primary Cluster ID
     */
    public $PrimaryClusterId;

    /**
     * @var string Master cluster region
     */
    public $PrimaryClusterRegion;

    /**
     * @var string from the cluster region
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
     * @var string Whether forced switchover is performed
     */
    public $ForceSwitchGdn;

    /**
     * @var integer Return code
     */
    public $Code;

    /**
     * @var string prompt message
     */
    public $Message;

    /**
     * @var string Whether forced switchover is supported
     */
    public $IsSupportForce;

    /**
     * @param string $GdnId Unique ID of the global database
     * @param string $GdnName unique alias of the global database
     * @param string $PrimaryClusterId Primary Cluster ID
     * @param string $PrimaryClusterRegion Master cluster region
     * @param string $StandbyClusterRegion from the cluster region
     * @param string $StandbyClusterId Slave cluster ID
     * @param string $StandbyClusterName From the cluster name
     * @param string $ForceSwitchGdn Whether forced switchover is performed
     * @param integer $Code Return code
     * @param string $Message prompt message
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

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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Deployment record information
 *
 * @method integer getId() Obtain Record ID
 * @method void setId(integer $Id) Set Record ID
 * @method string getCertId() Obtain New certificate ID
 * @method void setCertId(string $CertId) Set New certificate ID
 * @method string getOldCertId() Obtain Old certificate ID
 * @method void setOldCertId(string $OldCertId) Set Old certificate ID
 * @method array getResourceTypes() Obtain Deployment resource type list
 * @method void setResourceTypes(array $ResourceTypes) Set Deployment resource type list
 * @method array getRegions() Obtain Deployment region list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRegions(array $Regions) Set Deployment region list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStatus() Obtain Deployment status
 * @method void setStatus(integer $Status) Set Deployment status
 * @method string getCreateTime() Obtain Deployment time
 * @method void setCreateTime(string $CreateTime) Set Deployment time
 * @method string getUpdateTime() Obtain Last update time
 * @method void setUpdateTime(string $UpdateTime) Set Last update time
 */
class UpdateRecordInfo extends AbstractModel
{
    /**
     * @var integer Record ID
     */
    public $Id;

    /**
     * @var string New certificate ID
     */
    public $CertId;

    /**
     * @var string Old certificate ID
     */
    public $OldCertId;

    /**
     * @var array Deployment resource type list
     */
    public $ResourceTypes;

    /**
     * @var array Deployment region list
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Regions;

    /**
     * @var integer Deployment status
     */
    public $Status;

    /**
     * @var string Deployment time
     */
    public $CreateTime;

    /**
     * @var string Last update time
     */
    public $UpdateTime;

    /**
     * @param integer $Id Record ID
     * @param string $CertId New certificate ID
     * @param string $OldCertId Old certificate ID
     * @param array $ResourceTypes Deployment resource type list
     * @param array $Regions Deployment region list
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Status Deployment status
     * @param string $CreateTime Deployment time
     * @param string $UpdateTime Last update time
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("OldCertId",$param) and $param["OldCertId"] !== null) {
            $this->OldCertId = $param["OldCertId"];
        }

        if (array_key_exists("ResourceTypes",$param) and $param["ResourceTypes"] !== null) {
            $this->ResourceTypes = $param["ResourceTypes"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

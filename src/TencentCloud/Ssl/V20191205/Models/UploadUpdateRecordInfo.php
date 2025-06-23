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
 * Deployment record list information.
 *
 * @method integer getId() Obtain Record ID
 * @method void setId(integer $Id) Set Record ID
 * @method string getOldCertId() Obtain Original certificate ID
 * @method void setOldCertId(string $OldCertId) Set Original certificate ID
 * @method array getResourceTypes() Obtain Deployment resource type list.
 * @method void setResourceTypes(array $ResourceTypes) Set Deployment resource type list.
 * @method integer getStatus() Obtain Deployment state.
 * @method void setStatus(integer $Status) Set Deployment state.
 * @method string getCreateTime() Obtain Deployment time.
 * @method void setCreateTime(string $CreateTime) Set Deployment time.
 * @method string getUpdateTime() Obtain Last update time.
 * @method void setUpdateTime(string $UpdateTime) Set Last update time.
 */
class UploadUpdateRecordInfo extends AbstractModel
{
    /**
     * @var integer Record ID
     */
    public $Id;

    /**
     * @var string Original certificate ID
     */
    public $OldCertId;

    /**
     * @var array Deployment resource type list.
     */
    public $ResourceTypes;

    /**
     * @var integer Deployment state.
     */
    public $Status;

    /**
     * @var string Deployment time.
     */
    public $CreateTime;

    /**
     * @var string Last update time.
     */
    public $UpdateTime;

    /**
     * @param integer $Id Record ID
     * @param string $OldCertId Original certificate ID
     * @param array $ResourceTypes Deployment resource type list.
     * @param integer $Status Deployment state.
     * @param string $CreateTime Deployment time.
     * @param string $UpdateTime Last update time.
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

        if (array_key_exists("OldCertId",$param) and $param["OldCertId"] !== null) {
            $this->OldCertId = $param["OldCertId"];
        }

        if (array_key_exists("ResourceTypes",$param) and $param["ResourceTypes"] !== null) {
            $this->ResourceTypes = $param["ResourceTypes"];
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

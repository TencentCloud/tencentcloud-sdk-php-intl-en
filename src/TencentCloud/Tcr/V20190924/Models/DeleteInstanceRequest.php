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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteInstance request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method boolean getDeleteBucket() Obtain Whether to delete the bucket. Default value: false.
 * @method void setDeleteBucket(boolean $DeleteBucket) Set Whether to delete the bucket. Default value: false.
 * @method boolean getDryRun() Obtain Whether to enable the `dryRun` mode. Default value: false.
 * @method void setDryRun(boolean $DryRun) Set Whether to enable the `dryRun` mode. Default value: false.
 */
class DeleteInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var boolean Whether to delete the bucket. Default value: false.
     */
    public $DeleteBucket;

    /**
     * @var boolean Whether to enable the `dryRun` mode. Default value: false.
     */
    public $DryRun;

    /**
     * @param string $RegistryId Instance ID
     * @param boolean $DeleteBucket Whether to delete the bucket. Default value: false.
     * @param boolean $DryRun Whether to enable the `dryRun` mode. Default value: false.
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("DeleteBucket",$param) and $param["DeleteBucket"] !== null) {
            $this->DeleteBucket = $param["DeleteBucket"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}

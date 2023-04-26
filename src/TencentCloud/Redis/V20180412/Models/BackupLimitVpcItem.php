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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The VPC that corresponds to the configured download address of the backup file
 *
 * @method string getRegion() Obtain The region of the VPC that corresponds to the download address of the backup file
 * @method void setRegion(string $Region) Set The region of the VPC that corresponds to the download address of the backup file
 * @method array getVpcList() Obtain The list of VPCs that correspond to the download addresses of the backup files
 * @method void setVpcList(array $VpcList) Set The list of VPCs that correspond to the download addresses of the backup files
 */
class BackupLimitVpcItem extends AbstractModel
{
    /**
     * @var string The region of the VPC that corresponds to the download address of the backup file
     */
    public $Region;

    /**
     * @var array The list of VPCs that correspond to the download addresses of the backup files
     */
    public $VpcList;

    /**
     * @param string $Region The region of the VPC that corresponds to the download address of the backup file
     * @param array $VpcList The list of VPCs that correspond to the download addresses of the backup files
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcList",$param) and $param["VpcList"] !== null) {
            $this->VpcList = $param["VpcList"];
        }
    }
}

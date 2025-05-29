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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC settings for restricting backup download sources.
 *
 * @method string getRegion() Obtain Specifies the region for limiting download sources. currently only supports the current region.
 * @method void setRegion(string $Region) Set Specifies the region for limiting download sources. currently only supports the current region.
 * @method array getVpcList() Obtain Limit the vpc list for downloads.
 * @method void setVpcList(array $VpcList) Set Limit the vpc list for downloads.
 */
class BackupLimitVpcItem extends AbstractModel
{
    /**
     * @var string Specifies the region for limiting download sources. currently only supports the current region.
     */
    public $Region;

    /**
     * @var array Limit the vpc list for downloads.
     */
    public $VpcList;

    /**
     * @param string $Region Specifies the region for limiting download sources. currently only supports the current region.
     * @param array $VpcList Limit the vpc list for downloads.
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

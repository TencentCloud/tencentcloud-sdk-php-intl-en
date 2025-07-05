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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPCs used to restrict backup download
 *
 * @method string getRegion() Obtain The region where the backup download restrictions take effect. It must be the same as the common request parameter `Region` of the API.
 * @method void setRegion(string $Region) Set The region where the backup download restrictions take effect. It must be the same as the common request parameter `Region` of the API.
 * @method array getVpcList() Obtain The list of VPCs used to restrict backup download
 * @method void setVpcList(array $VpcList) Set The list of VPCs used to restrict backup download
 */
class BackupLimitVpcItem extends AbstractModel
{
    /**
     * @var string The region where the backup download restrictions take effect. It must be the same as the common request parameter `Region` of the API.
     */
    public $Region;

    /**
     * @var array The list of VPCs used to restrict backup download
     */
    public $VpcList;

    /**
     * @param string $Region The region where the backup download restrictions take effect. It must be the same as the common request parameter `Region` of the API.
     * @param array $VpcList The list of VPCs used to restrict backup download
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

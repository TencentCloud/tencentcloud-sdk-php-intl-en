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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * All Download addresses of cross-region backup
 *
 * @method string getCrossRegion() Obtain The target region of cross-region backup
 * @method void setCrossRegion(string $CrossRegion) Set The target region of cross-region backup
 * @method string getCrossInternalAddr() Obtain The address used to download the cross-region backup over a private network
 * @method void setCrossInternalAddr(string $CrossInternalAddr) Set The address used to download the cross-region backup over a private network
 * @method string getCrossExternalAddr() Obtain The address used to download the cross-region backup over a public network
 * @method void setCrossExternalAddr(string $CrossExternalAddr) Set The address used to download the cross-region backup over a public network
 */
class CrossBackupAddr extends AbstractModel
{
    /**
     * @var string The target region of cross-region backup
     */
    public $CrossRegion;

    /**
     * @var string The address used to download the cross-region backup over a private network
     */
    public $CrossInternalAddr;

    /**
     * @var string The address used to download the cross-region backup over a public network
     */
    public $CrossExternalAddr;

    /**
     * @param string $CrossRegion The target region of cross-region backup
     * @param string $CrossInternalAddr The address used to download the cross-region backup over a private network
     * @param string $CrossExternalAddr The address used to download the cross-region backup over a public network
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
        if (array_key_exists("CrossRegion",$param) and $param["CrossRegion"] !== null) {
            $this->CrossRegion = $param["CrossRegion"];
        }

        if (array_key_exists("CrossInternalAddr",$param) and $param["CrossInternalAddr"] !== null) {
            $this->CrossInternalAddr = $param["CrossInternalAddr"];
        }

        if (array_key_exists("CrossExternalAddr",$param) and $param["CrossExternalAddr"] !== null) {
            $this->CrossExternalAddr = $param["CrossExternalAddr"];
        }
    }
}

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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportClientSettingHostList request structure.
 *
 * @method string getBusiType() Obtain <p>Export business type PreventUninstall Uninstall prevention host list export LoginType QR code login host list export ProcessDaemon Process daemon host list export</p>
 * @method void setBusiType(string $BusiType) Set <p>Export business type PreventUninstall Uninstall prevention host list export LoginType QR code login host list export ProcessDaemon Process daemon host list export</p>
 * @method array getMemberId() Obtain <p>Group account member id.</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id.</p>
 * @method array getFilters() Obtain <p>Filter parameter</p>
 * @method void setFilters(array $Filters) Set <p>Filter parameter</p>
 */
class ExportClientSettingHostListRequest extends AbstractModel
{
    /**
     * @var string <p>Export business type PreventUninstall Uninstall prevention host list export LoginType QR code login host list export ProcessDaemon Process daemon host list export</p>
     */
    public $BusiType;

    /**
     * @var array <p>Group account member id.</p>
     */
    public $MemberId;

    /**
     * @var array <p>Filter parameter</p>
     */
    public $Filters;

    /**
     * @param string $BusiType <p>Export business type PreventUninstall Uninstall prevention host list export LoginType QR code login host list export ProcessDaemon Process daemon host list export</p>
     * @param array $MemberId <p>Group account member id.</p>
     * @param array $Filters <p>Filter parameter</p>
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
        if (array_key_exists("BusiType",$param) and $param["BusiType"] !== null) {
            $this->BusiType = $param["BusiType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new EDRFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}

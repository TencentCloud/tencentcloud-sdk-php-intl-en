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
 * StartOrModifyProcessDaemon request structure.
 *
 * @method integer getFrom() Obtain <p>Operation source 0   Host Page 1   Client Settings Page</p>
 * @method void setFrom(integer $From) Set <p>Operation source 0   Host Page 1   Client Settings Page</p>
 * @method integer getScope() Obtain <p>Enable scope 0 Selected host 1 All hosts</p>
 * @method void setScope(integer $Scope) Set <p>Enable scope 0 Selected host 1 All hosts</p>
 * @method array getMemberId() Obtain <p>Group account member id.</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id.</p>
 * @method array getIncludeQuuid() Obtain <p>Selected quuid set</p>
 * @method void setIncludeQuuid(array $IncludeQuuid) Set <p>Selected quuid set</p>
 * @method array getExcludeQuuid() Obtain <p>Excluded quuid set</p>
 * @method void setExcludeQuuid(array $ExcludeQuuid) Set <p>Excluded quuid set</p>
 */
class StartOrModifyProcessDaemonRequest extends AbstractModel
{
    /**
     * @var integer <p>Operation source 0   Host Page 1   Client Settings Page</p>
     */
    public $From;

    /**
     * @var integer <p>Enable scope 0 Selected host 1 All hosts</p>
     */
    public $Scope;

    /**
     * @var array <p>Group account member id.</p>
     */
    public $MemberId;

    /**
     * @var array <p>Selected quuid set</p>
     */
    public $IncludeQuuid;

    /**
     * @var array <p>Excluded quuid set</p>
     */
    public $ExcludeQuuid;

    /**
     * @param integer $From <p>Operation source 0   Host Page 1   Client Settings Page</p>
     * @param integer $Scope <p>Enable scope 0 Selected host 1 All hosts</p>
     * @param array $MemberId <p>Group account member id.</p>
     * @param array $IncludeQuuid <p>Selected quuid set</p>
     * @param array $ExcludeQuuid <p>Excluded quuid set</p>
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
        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("IncludeQuuid",$param) and $param["IncludeQuuid"] !== null) {
            $this->IncludeQuuid = $param["IncludeQuuid"];
        }

        if (array_key_exists("ExcludeQuuid",$param) and $param["ExcludeQuuid"] !== null) {
            $this->ExcludeQuuid = $param["ExcludeQuuid"];
        }
    }
}

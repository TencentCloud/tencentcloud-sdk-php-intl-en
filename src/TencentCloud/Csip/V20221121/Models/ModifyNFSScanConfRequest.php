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
 * ModifyNFSScanConf request structure.
 *
 * @method integer getEnable() Obtain <p>Whether NFS scan is enabled. 0: No, 1: Yes, 9: Not set. Same as 0, it is not enabled.</p>
 * @method void setEnable(integer $Enable) Set <p>Whether NFS scan is enabled. 0: No, 1: Yes, 9: Not set. Same as 0, it is not enabled.</p>
 * @method integer getScope() Obtain <p>Enable scope 0 Selected host 1 All hosts</p>
 * @method void setScope(integer $Scope) Set <p>Enable scope 0 Selected host 1 All hosts</p>
 * @method array getMemberId() Obtain <p>Group account member id.</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id.</p>
 * @method integer getId() Obtain <p>Record ID, which is 0 when projects are added</p>
 * @method void setId(integer $Id) Set <p>Record ID, which is 0 when projects are added</p>
 * @method array getIncludeQuuid() Obtain <p>List of selected quuid configurations</p>
 * @method void setIncludeQuuid(array $IncludeQuuid) Set <p>List of selected quuid configurations</p>
 * @method array getExcludeQuuid() Obtain <p>List of unselected quuid configurations</p>
 * @method void setExcludeQuuid(array $ExcludeQuuid) Set <p>List of unselected quuid configurations</p>
 */
class ModifyNFSScanConfRequest extends AbstractModel
{
    /**
     * @var integer <p>Whether NFS scan is enabled. 0: No, 1: Yes, 9: Not set. Same as 0, it is not enabled.</p>
     */
    public $Enable;

    /**
     * @var integer <p>Enable scope 0 Selected host 1 All hosts</p>
     */
    public $Scope;

    /**
     * @var array <p>Group account member id.</p>
     */
    public $MemberId;

    /**
     * @var integer <p>Record ID, which is 0 when projects are added</p>
     */
    public $Id;

    /**
     * @var array <p>List of selected quuid configurations</p>
     */
    public $IncludeQuuid;

    /**
     * @var array <p>List of unselected quuid configurations</p>
     */
    public $ExcludeQuuid;

    /**
     * @param integer $Enable <p>Whether NFS scan is enabled. 0: No, 1: Yes, 9: Not set. Same as 0, it is not enabled.</p>
     * @param integer $Scope <p>Enable scope 0 Selected host 1 All hosts</p>
     * @param array $MemberId <p>Group account member id.</p>
     * @param integer $Id <p>Record ID, which is 0 when projects are added</p>
     * @param array $IncludeQuuid <p>List of selected quuid configurations</p>
     * @param array $ExcludeQuuid <p>List of unselected quuid configurations</p>
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IncludeQuuid",$param) and $param["IncludeQuuid"] !== null) {
            $this->IncludeQuuid = $param["IncludeQuuid"];
        }

        if (array_key_exists("ExcludeQuuid",$param) and $param["ExcludeQuuid"] !== null) {
            $this->ExcludeQuuid = $param["ExcludeQuuid"];
        }
    }
}

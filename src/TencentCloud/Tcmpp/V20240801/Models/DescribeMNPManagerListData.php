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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mini program management page list
 *
 * @method string getMNPId() Obtain Mini program ID
 * @method void setMNPId(string $MNPId) Set Mini program ID
 * @method string getMNPIcon() Obtain Mini program icon
 * @method void setMNPIcon(string $MNPIcon) Set Mini program icon
 * @method string getMNPName() Obtain Mini program name
 * @method void setMNPName(string $MNPName) Set Mini program name
 * @method string getTeamName() Obtain Team name
 * @method void setTeamName(string $TeamName) Set Team name
 * @method integer getAccessStatus() Obtain Access status 1-Not accessed 2-Accessed
 * @method void setAccessStatus(integer $AccessStatus) Set Access status 1-Not accessed 2-Accessed
 * @method integer getStatus() Obtain Mini program release status. 1: Released; 2: Removed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Mini program release status. 1: Released; 2: Removed
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeMNPManagerListData extends AbstractModel
{
    /**
     * @var string Mini program ID
     */
    public $MNPId;

    /**
     * @var string Mini program icon
     */
    public $MNPIcon;

    /**
     * @var string Mini program name
     */
    public $MNPName;

    /**
     * @var string Team name
     */
    public $TeamName;

    /**
     * @var integer Access status 1-Not accessed 2-Accessed
     */
    public $AccessStatus;

    /**
     * @var integer Mini program release status. 1: Released; 2: Removed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param string $MNPId Mini program ID
     * @param string $MNPIcon Mini program icon
     * @param string $MNPName Mini program name
     * @param string $TeamName Team name
     * @param integer $AccessStatus Access status 1-Not accessed 2-Accessed
     * @param integer $Status Mini program release status. 1: Released; 2: Removed
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("MNPIcon",$param) and $param["MNPIcon"] !== null) {
            $this->MNPIcon = $param["MNPIcon"];
        }

        if (array_key_exists("MNPName",$param) and $param["MNPName"] !== null) {
            $this->MNPName = $param["MNPName"];
        }

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }

        if (array_key_exists("AccessStatus",$param) and $param["AccessStatus"] !== null) {
            $this->AccessStatus = $param["AccessStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

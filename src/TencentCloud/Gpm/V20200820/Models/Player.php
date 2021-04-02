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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Player information
 *
 * @method string getId() Obtain Player ID. It can contain up to 128 characters, supporting [a-zA-Z\d-\._]*.
 * @method void setId(string $Id) Set Player ID. It can contain up to 128 characters, supporting [a-zA-Z\d-\._]*.
 * @method string getName() Obtain Player nickname. Up to 128 characters are allowed.
 * @method void setName(string $Name) Set Player nickname. Up to 128 characters are allowed.
 * @method array getMatchAttributes() Obtain Player attribute for matching. Up to 10 attributes are supported.
 * @method void setMatchAttributes(array $MatchAttributes) Set Player attribute for matching. Up to 10 attributes are supported.
 * @method string getTeam() Obtain Team name. A player can pass in a different team name, which can contain up to 128 characters, and support [a-zA-Z0-9-\.]*.
 * @method void setTeam(string $Team) Set Team name. A player can pass in a different team name, which can contain up to 128 characters, and support [a-zA-Z0-9-\.]*.
 * @method integer getCustomPlayerStatus() Obtain Custom player status. This parameter will be passed through. Value range: [0, 99999]
 * @method void setCustomPlayerStatus(integer $CustomPlayerStatus) Set Custom player status. This parameter will be passed through. Value range: [0, 99999]
 * @method string getCustomProfile() Obtain Custom player information. Up to 1024 characters are allowed. This parameter will be passed through.
 * @method void setCustomProfile(string $CustomProfile) Set Custom player information. Up to 1024 characters are allowed. This parameter will be passed through.
 * @method array getRegionLatencies() Obtain Number of delays in each area. Up to 20 delays are supported.
 * @method void setRegionLatencies(array $RegionLatencies) Set Number of delays in each area. Up to 20 delays are supported.
 */
class Player extends AbstractModel
{
    /**
     * @var string Player ID. It can contain up to 128 characters, supporting [a-zA-Z\d-\._]*.
     */
    public $Id;

    /**
     * @var string Player nickname. Up to 128 characters are allowed.
     */
    public $Name;

    /**
     * @var array Player attribute for matching. Up to 10 attributes are supported.
     */
    public $MatchAttributes;

    /**
     * @var string Team name. A player can pass in a different team name, which can contain up to 128 characters, and support [a-zA-Z0-9-\.]*.
     */
    public $Team;

    /**
     * @var integer Custom player status. This parameter will be passed through. Value range: [0, 99999]
     */
    public $CustomPlayerStatus;

    /**
     * @var string Custom player information. Up to 1024 characters are allowed. This parameter will be passed through.
     */
    public $CustomProfile;

    /**
     * @var array Number of delays in each area. Up to 20 delays are supported.
     */
    public $RegionLatencies;

    /**
     * @param string $Id Player ID. It can contain up to 128 characters, supporting [a-zA-Z\d-\._]*.
     * @param string $Name Player nickname. Up to 128 characters are allowed.
     * @param array $MatchAttributes Player attribute for matching. Up to 10 attributes are supported.
     * @param string $Team Team name. A player can pass in a different team name, which can contain up to 128 characters, and support [a-zA-Z0-9-\.]*.
     * @param integer $CustomPlayerStatus Custom player status. This parameter will be passed through. Value range: [0, 99999]
     * @param string $CustomProfile Custom player information. Up to 1024 characters are allowed. This parameter will be passed through.
     * @param array $RegionLatencies Number of delays in each area. Up to 20 delays are supported.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MatchAttributes",$param) and $param["MatchAttributes"] !== null) {
            $this->MatchAttributes = [];
            foreach ($param["MatchAttributes"] as $key => $value){
                $obj = new MatchAttribute();
                $obj->deserialize($value);
                array_push($this->MatchAttributes, $obj);
            }
        }

        if (array_key_exists("Team",$param) and $param["Team"] !== null) {
            $this->Team = $param["Team"];
        }

        if (array_key_exists("CustomPlayerStatus",$param) and $param["CustomPlayerStatus"] !== null) {
            $this->CustomPlayerStatus = $param["CustomPlayerStatus"];
        }

        if (array_key_exists("CustomProfile",$param) and $param["CustomProfile"] !== null) {
            $this->CustomProfile = $param["CustomProfile"];
        }

        if (array_key_exists("RegionLatencies",$param) and $param["RegionLatencies"] !== null) {
            $this->RegionLatencies = [];
            foreach ($param["RegionLatencies"] as $key => $value){
                $obj = new RegionLatency();
                $obj->deserialize($value);
                array_push($this->RegionLatencies, $obj);
            }
        }
    }
}

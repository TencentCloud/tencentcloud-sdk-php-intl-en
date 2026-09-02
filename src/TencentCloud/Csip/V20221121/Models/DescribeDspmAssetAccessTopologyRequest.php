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
 * DescribeDspmAssetAccessTopology request structure.
 *
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method string getView() Obtain View type. Valid values: `ip` or `instance`.
 * @method void setView(string $View) Set View type. Valid values: `ip` or `instance`.
 * @method Filter getFilter() Obtain -View by source ip
View: "ip"

Filter:{
	{
		"Name":"Ip",
		"Values":["172.1.1.1"]
	},
	{
		"Name":"AssetId",
		"Values":["cdb-1111|ap-guangzhou","cdb-2222|ap-guangzhou","cdb-3333|ap-guangzhou"]
	},
	{
		"Name":"Account",
		"Values":["root|%","test|%"]
	}
}


-View by instance
View: "instance"

Filter:{
	{
		"Name":"AssetId",
		"Values":["cdb-1111|ap-guangzhou"]
	},
	{
		"Name":"Ip",
		"Values":["172.1.1.1","172.1.1.2","172.1.1.3"]
	},
	{
		"Name":"Account",
		"Values":["root|%","test|%"]
	}
}

 * @method void setFilter(Filter $Filter) Set -View by source ip
View: "ip"

Filter:{
	{
		"Name":"Ip",
		"Values":["172.1.1.1"]
	},
	{
		"Name":"AssetId",
		"Values":["cdb-1111|ap-guangzhou","cdb-2222|ap-guangzhou","cdb-3333|ap-guangzhou"]
	},
	{
		"Name":"Account",
		"Values":["root|%","test|%"]
	}
}


-View by instance
View: "instance"

Filter:{
	{
		"Name":"AssetId",
		"Values":["cdb-1111|ap-guangzhou"]
	},
	{
		"Name":"Ip",
		"Values":["172.1.1.1","172.1.1.2","172.1.1.3"]
	},
	{
		"Name":"Account",
		"Values":["root|%","test|%"]
	}
}
 */
class DescribeDspmAssetAccessTopologyRequest extends AbstractModel
{
    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var string View type. Valid values: `ip` or `instance`.
     */
    public $View;

    /**
     * @var Filter -View by source ip
View: "ip"

Filter:{
	{
		"Name":"Ip",
		"Values":["172.1.1.1"]
	},
	{
		"Name":"AssetId",
		"Values":["cdb-1111|ap-guangzhou","cdb-2222|ap-guangzhou","cdb-3333|ap-guangzhou"]
	},
	{
		"Name":"Account",
		"Values":["root|%","test|%"]
	}
}


-View by instance
View: "instance"

Filter:{
	{
		"Name":"AssetId",
		"Values":["cdb-1111|ap-guangzhou"]
	},
	{
		"Name":"Ip",
		"Values":["172.1.1.1","172.1.1.2","172.1.1.3"]
	},
	{
		"Name":"Account",
		"Values":["root|%","test|%"]
	}
}

     */
    public $Filter;

    /**
     * @param array $MemberId Group Account Member ID
     * @param string $View View type. Valid values: `ip` or `instance`.
     * @param Filter $Filter -View by source ip
View: "ip"

Filter:{
	{
		"Name":"Ip",
		"Values":["172.1.1.1"]
	},
	{
		"Name":"AssetId",
		"Values":["cdb-1111|ap-guangzhou","cdb-2222|ap-guangzhou","cdb-3333|ap-guangzhou"]
	},
	{
		"Name":"Account",
		"Values":["root|%","test|%"]
	}
}


-View by instance
View: "instance"

Filter:{
	{
		"Name":"AssetId",
		"Values":["cdb-1111|ap-guangzhou"]
	},
	{
		"Name":"Ip",
		"Values":["172.1.1.1","172.1.1.2","172.1.1.3"]
	},
	{
		"Name":"Account",
		"Values":["root|%","test|%"]
	}
}
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("View",$param) and $param["View"] !== null) {
            $this->View = $param["View"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}

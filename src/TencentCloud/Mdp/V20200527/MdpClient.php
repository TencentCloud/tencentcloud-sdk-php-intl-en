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

namespace TencentCloud\Mdp\V20200527;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mdp\V20200527\Models as Models;

/**
 * @method Models\BindLinearAssemblyCDNDomainWithChannelResponse BindLinearAssemblyCDNDomainWithChannel(Models\BindLinearAssemblyCDNDomainWithChannelRequest $req) Linear Assembly channel is bound to CDN playback domain name.
 * @method Models\BindNewLVBDomainWithChannelResponse BindNewLVBDomainWithChannel(Models\BindNewLVBDomainWithChannelRequest $req) This API is used to bind an LVB domain name to a channel.
 * @method Models\CreateStreamPackageChannelResponse CreateStreamPackageChannel(Models\CreateStreamPackageChannelRequest $req) This API is used to create a StreamPackage channel.
 * @method Models\CreateStreamPackageChannelEndpointResponse CreateStreamPackageChannelEndpoint(Models\CreateStreamPackageChannelEndpointRequest $req) This API is used to create an endpoint on a StreamPackage channel.
 * @method Models\CreateStreamPackageHarvestJobResponse CreateStreamPackageHarvestJob(Models\CreateStreamPackageHarvestJobRequest $req) Create HarvestJob.
 * @method Models\CreateStreamPackageLinearAssemblyChannelResponse CreateStreamPackageLinearAssemblyChannel(Models\CreateStreamPackageLinearAssemblyChannelRequest $req) Create a linear assembly channel.
 * @method Models\CreateStreamPackageLinearAssemblyProgramResponse CreateStreamPackageLinearAssemblyProgram(Models\CreateStreamPackageLinearAssemblyProgramRequest $req) Create a linear assembly program.
 * @method Models\CreateStreamPackageSSAIChannelResponse CreateStreamPackageSSAIChannel(Models\CreateStreamPackageSSAIChannelRequest $req) CreateStreamPackageSSAIChannel
 * @method Models\CreateStreamPackageSourceResponse CreateStreamPackageSource(Models\CreateStreamPackageSourceRequest $req) Create channel linear assembly Source.
 * @method Models\CreateStreamPackageSourceLocationResponse CreateStreamPackageSourceLocation(Models\CreateStreamPackageSourceLocationRequest $req) Create Linear Assembly SourceLocation.
 * @method Models\DeleteStreamPackageChannelEndpointsResponse DeleteStreamPackageChannelEndpoints(Models\DeleteStreamPackageChannelEndpointsRequest $req) This API is used to delete endpoints from a StreamPackage channel in batches.
 * @method Models\DeleteStreamPackageChannelsResponse DeleteStreamPackageChannels(Models\DeleteStreamPackageChannelsRequest $req) This API is used to delete StreamPackage channels in batches.
 * @method Models\DeleteStreamPackageHarvestJobResponse DeleteStreamPackageHarvestJob(Models\DeleteStreamPackageHarvestJobRequest $req) Delete HarvestJob.
 * @method Models\DeleteStreamPackageHarvestJobsResponse DeleteStreamPackageHarvestJobs(Models\DeleteStreamPackageHarvestJobsRequest $req) Deleting HarvestJobs in Batch.
 * @method Models\DeleteStreamPackageLinearAssemblyChannelResponse DeleteStreamPackageLinearAssemblyChannel(Models\DeleteStreamPackageLinearAssemblyChannelRequest $req) Delete channel linear assemblyChannel.
 * @method Models\DeleteStreamPackageLinearAssemblyChannelsResponse DeleteStreamPackageLinearAssemblyChannels(Models\DeleteStreamPackageLinearAssemblyChannelsRequest $req) Delete channels in batches and linearly assemble channels.
 * @method Models\DeleteStreamPackageLinearAssemblyProgramResponse DeleteStreamPackageLinearAssemblyProgram(Models\DeleteStreamPackageLinearAssemblyProgramRequest $req) Delete Channel Linear Assembly Program.
 * @method Models\DeleteStreamPackageLinearAssemblyProgramsResponse DeleteStreamPackageLinearAssemblyPrograms(Models\DeleteStreamPackageLinearAssemblyProgramsRequest $req) Batch deletion of channels linear assembly program.
 * @method Models\DeleteStreamPackageSSAIChannelResponse DeleteStreamPackageSSAIChannel(Models\DeleteStreamPackageSSAIChannelRequest $req) DeleteStreamPackageSSAIChannel
 * @method Models\DeleteStreamPackageSourceResponse DeleteStreamPackageSource(Models\DeleteStreamPackageSourceRequest $req) Delete channel linear assembly Source.
 * @method Models\DeleteStreamPackageSourceLocationResponse DeleteStreamPackageSourceLocation(Models\DeleteStreamPackageSourceLocationRequest $req) Batch delete media packaging SourceLocation.
 * @method Models\DescribeLinearAssemblyCDNDomainWithChannelResponse DescribeLinearAssemblyCDNDomainWithChannel(Models\DescribeLinearAssemblyCDNDomainWithChannelRequest $req) Query the CDN domain name associated with the LinearAssembly channel.
 * @method Models\DescribeLinearAssemblyCDNDomainWithChannelsResponse DescribeLinearAssemblyCDNDomainWithChannels(Models\DescribeLinearAssemblyCDNDomainWithChannelsRequest $req) Query the CDN domain names associated with all LinearAssembly channels.
 * @method Models\DescribeStreamPackageChannelResponse DescribeStreamPackageChannel(Models\DescribeStreamPackageChannelRequest $req) This API is used to query the information of a StreamPackage channel.
 * @method Models\DescribeStreamPackageChannelsResponse DescribeStreamPackageChannels(Models\DescribeStreamPackageChannelsRequest $req) This API is used to query the information of multiple StreamPackage channels.
 * @method Models\DescribeStreamPackageHarvestJobResponse DescribeStreamPackageHarvestJob(Models\DescribeStreamPackageHarvestJobRequest $req) Query HarvestJob.
 * @method Models\DescribeStreamPackageHarvestJobsResponse DescribeStreamPackageHarvestJobs(Models\DescribeStreamPackageHarvestJobsRequest $req) Batch query HarvestJob.
 * @method Models\DescribeStreamPackageLinearAssemblyChannelResponse DescribeStreamPackageLinearAssemblyChannel(Models\DescribeStreamPackageLinearAssemblyChannelRequest $req) Query channel linear assembly Channel information.
 * @method Models\DescribeStreamPackageLinearAssemblyChannelAlertsResponse DescribeStreamPackageLinearAssemblyChannelAlerts(Models\DescribeStreamPackageLinearAssemblyChannelAlertsRequest $req) Query linear assembly channel alarm information.
 * @method Models\DescribeStreamPackageLinearAssemblyChannelsResponse DescribeStreamPackageLinearAssemblyChannels(Models\DescribeStreamPackageLinearAssemblyChannelsRequest $req) Query channel linear assembly Channel information list.
 * @method Models\DescribeStreamPackageLinearAssemblyProgramResponse DescribeStreamPackageLinearAssemblyProgram(Models\DescribeStreamPackageLinearAssemblyProgramRequest $req) Query channel linear assembly program information.
 * @method Models\DescribeStreamPackageLinearAssemblyProgramSchedulesResponse DescribeStreamPackageLinearAssemblyProgramSchedules(Models\DescribeStreamPackageLinearAssemblyProgramSchedulesRequest $req) Query channel linear assembly Programl assembly scheduling information list.
 * @method Models\DescribeStreamPackageLinearAssemblyProgramsResponse DescribeStreamPackageLinearAssemblyPrograms(Models\DescribeStreamPackageLinearAssemblyProgramsRequest $req) Query channel linear assembly Programl information list.
 * @method Models\DescribeStreamPackageSSAIChannelResponse DescribeStreamPackageSSAIChannel(Models\DescribeStreamPackageSSAIChannelRequest $req) DescribeStreamPackageSSAIChannel
 * @method Models\DescribeStreamPackageSSAIChannelsResponse DescribeStreamPackageSSAIChannels(Models\DescribeStreamPackageSSAIChannelsRequest $req) DescribeStreamPackageSSAIChannels
 * @method Models\DescribeStreamPackageSourceResponse DescribeStreamPackageSource(Models\DescribeStreamPackageSourceRequest $req) Query channel linear assembly Source information.
 * @method Models\DescribeStreamPackageSourceAlertsResponse DescribeStreamPackageSourceAlerts(Models\DescribeStreamPackageSourceAlertsRequest $req) Query channel linear assembly Source alarm information.
 * @method Models\DescribeStreamPackageSourceLocationResponse DescribeStreamPackageSourceLocation(Models\DescribeStreamPackageSourceLocationRequest $req) Query channel linear assembly sourceLocation information.
 * @method Models\DescribeStreamPackageSourceLocationAlertsResponse DescribeStreamPackageSourceLocationAlerts(Models\DescribeStreamPackageSourceLocationAlertsRequest $req) Query channel linear assembly Location alarm information.
 * @method Models\DescribeStreamPackageSourceLocationsResponse DescribeStreamPackageSourceLocations(Models\DescribeStreamPackageSourceLocationsRequest $req) Query channel linear assembly SourceLocation information list.
 * @method Models\DescribeStreamPackageSourcesResponse DescribeStreamPackageSources(Models\DescribeStreamPackageSourcesRequest $req) Query channel linear assembly Source information list.
 * @method Models\ModifyStreamPackageChannelResponse ModifyStreamPackageChannel(Models\ModifyStreamPackageChannelRequest $req) This API is used to modify a StreamPackage channel.
 * @method Models\ModifyStreamPackageChannelEndpointResponse ModifyStreamPackageChannelEndpoint(Models\ModifyStreamPackageChannelEndpointRequest $req) This API is used to modify an endpoint of a StreamPackage channel.
 * @method Models\ModifyStreamPackageChannelInputAuthInfoResponse ModifyStreamPackageChannelInputAuthInfo(Models\ModifyStreamPackageChannelInputAuthInfoRequest $req) This API is used to modify the input authentication information of a StreamPackage channel.
 * @method Models\ModifyStreamPackageLinearAssemblyChannelResponse ModifyStreamPackageLinearAssemblyChannel(Models\ModifyStreamPackageLinearAssemblyChannelRequest $req) Modify channel linear assembly Channel configuration.
 * @method Models\ModifyStreamPackageLinearAssemblyProgramResponse ModifyStreamPackageLinearAssemblyProgram(Models\ModifyStreamPackageLinearAssemblyProgramRequest $req) Modify channel linear assembly Program configuration.
 * @method Models\ModifyStreamPackageSSAIChannelResponse ModifyStreamPackageSSAIChannel(Models\ModifyStreamPackageSSAIChannelRequest $req) ModifyStreamPackageSSAIChannel
 * @method Models\ModifyStreamPackageSourceResponse ModifyStreamPackageSource(Models\ModifyStreamPackageSourceRequest $req) Modify channel linear assembly Source configuration.
 * @method Models\ModifyStreamPackageSourceLocationResponse ModifyStreamPackageSourceLocation(Models\ModifyStreamPackageSourceLocationRequest $req) Modify channel linear assembly SourceLocation configuration
 * @method Models\StartStreamPackageLinearAssemblyChannelResponse StartStreamPackageLinearAssemblyChannel(Models\StartStreamPackageLinearAssemblyChannelRequest $req) Start Linear Assembly Channel.
 * @method Models\StopStreamPackageLinearAssemblyChannelResponse StopStreamPackageLinearAssemblyChannel(Models\StopStreamPackageLinearAssemblyChannelRequest $req) Stop linear assembly channel.
 * @method Models\UnbindCdnDomainWithChannelResponse UnbindCdnDomainWithChannel(Models\UnbindCdnDomainWithChannelRequest $req) This API is used to unbind a CDN playback domain name from a channel.
 * @method Models\UnbindLinearAssemblyCDNDomainWithChannelResponse UnbindLinearAssemblyCDNDomainWithChannel(Models\UnbindLinearAssemblyCDNDomainWithChannelRequest $req) Unbind LinearAssembly channel with CDN domain name.
 */

class MdpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mdp.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mdp";

    /**
     * @var string
     */
    protected $version = "2020-05-27";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("mdp")."\\"."V20200527\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

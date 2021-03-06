

<?php $__env->startSection('style'); ?>
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header1'); ?>
	<?php echo $__env->make('includes/header1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="page_1">
		<div class="top_section">
			<div id="xcel_image"><img src="<?php echo e(asset('images/EN-image.svg')); ?>"></div>
			<div class="xcel_image5 DB">Design Basis - Automation</div>
			<hr class="top_break">
			<div class="xcel_image1"><span><?php echo e($test[0]->SiteName); ?></span> - Valve Automation</div>
			<div class="xcel_image2">Xcel CNST COMM Work Order No. <span><?php echo e($test[0]->CommNum); ?></span></div>	
			<div class="xcel_image2">Xcel CNST MECH Work Order No. <span><?php echo e($test[0]->ConstNum); ?></span></div>
			<div class="xcel_image2">ENE Project No. <?php echo e($test[0]->ProjectNum); ?></div>
			<div class="xcel_image4">Prepared by</div>
			<div><img src="<?php echo e(asset('images/EN-image-2.svg')); ?>" class="image2"></div>
			<div class="xcel_image4 APPROVAL">APPROVALS</div>
			<div>
				<table class="table1 xcel_image5 table1_width">
					<tr>
						<th colspan="6" class="table1_bc">Required Approval</th>
					</tr>
					<tr>
						<th>Rev</th>
						<th class="table1_th"></th>
						<th>Prepared By</th>
						<th>Date</th>
						<th>Approved By</th>
						<th>Date</th>
					</tr>
					<tr>
						<td><?php echo e($test[0]->Issuance); ?></td>
						<td></td>
						<td><?php echo e($test[0]->PrepBy); ?></td>
						<td><?php echo e($test[0]->subDate); ?></td>
						<td><?php echo e($test[0]->ReviewBy); ?></td>
						<td><?php echo e($test[0]->ApproveBy); ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
		</div>
			<hr class="break_1 top_break">
			<div class="xcel_image5 bottom_section">
				<div>Document No. <?php echo e($test[0]->ProjectNum); ?> - Design Basis <?php if($test[0]->Issuance == "IFR"): ?> A <?php elseif($test[0]->Issuance == "IFB"): ?> B <?php else: ?> 0 <?php endif; ?></div>
				<div>Project: <span><?php echo e($test[0]->SiteName); ?></span> - Valve Automation</div>
				<div class="page-break">ENE Project #: <?php echo e($test[0]->ProjectNum); ?></div>
			</div>
	</div>
	<div class="page_2">
		<div class="top_section">
			<div id="xcel_image"><img src="<?php echo e(asset('images/EN-image.svg')); ?>"></div>
			<div class="xcel_image5 DB">Design Basis - Automation</div>
			<hr class="top_break">
			<table class="table2 xcel_image5 table2_width">
				<tr>
					<td class="table2_tr_td1">1.</td>
					<td class="table2_td2">LOCATION DETAILS</td>
					<td class="table2_td3">3</td>
				</tr>
				<tr>
					<td class="table2_td1">2.</td>
					<td class="table2_td2">PROJECT SCOPE</td>
					<td class="table2_td3">3</td>
				</tr>
				<tr>
					<td class="table2_td1">3.</td>
					<td class="table2_td2">DESIGN INPUTS</td>
					<td class="table2_td3">3</td>
				</tr>
				<tr>
					<td class="table2_td1">4.</td>
					<td class="table2_td2">PROGRAMMING</td>
					<td class="table2_td3">4</td>
				</tr>
				<tr>
					<td class="table2_td1">5.</td>
					<td class="table2_td2">ATTACHMENTS</td>
					<td class="table2_td3">4</td>
				</tr>
				<tr>
					<td class="table2_td11">5.1</td>
					<td class="table2_td2">Diagrams, Sketches, and Other Documents</td>
					<td class="table2_td3">4</td>
				</tr>
				<tr>
					<td class="table2_td11">5.2</td>
					<td class="table2_td2">Diagram of Proposed Work</td>
					<td class="table2_td3">4</td>
				</tr>
				<tr>
					<td class="table2_td11">5.3</td>
					<td class="table2_td2">Site Photos</td>
				</tr>
			</table>
		</div>
			<hr class="break_2 top_break">
			<div class="xcel_image5 bottom_section">
				<div>Document No. <?php echo e($test[0]->ProjectNum); ?> - Design Basis <?php if($test[0]->Issuance == "IFR"): ?> A <?php elseif($test[0]->Issuance == "IFB"): ?> B <?php else: ?> 0 <?php endif; ?></div>
				<div>Project: <span><?php echo e($test[0]->SiteName); ?></span> - Valve Automation</div>
				<div class="page-break">ENE Project #: <?php echo e($test[0]->ProjectNum); ?></div>
			</div>
	</div>
	<div class="page_3">
		<div class="top_section">
			<div id="xcel_image"><img src="<?php echo e(asset('images/EN-image.svg')); ?>"></div>
			<div class="xcel_image5 DB">Design Basis - Automation</div>
			<hr class="top_break">
			<div class="xcel_image6 page3_locationline">1 LOCATION</div>
			<table class="table3">
				<tr class="xcel_image4">
					<th class="page3_item">Item</th>
					<th class="page3_description">Description</th>
				</tr>
				<tr class="xcel_image5">
					<td>Site Location</td>
					<td><?php echo e($test[0]->location); ?></td>
				</tr>
				<tr class="xcel_image5">
					<td></td>
					<td><?php echo e($test[0]->latitude); ?> °N, <?php echo e($test[0]->longitude); ?> °W</td>
				</tr>
				<tr class="xcel_image5">
					<td></td>
					<td><?php echo e($test[0]->section); ?>, <?php echo e($test[0]->township); ?>, <?php echo e($test[0]->Range_); ?>, <?php echo e($test[0]->division); ?> <?php echo e($test[0]->county); ?></td>
				</tr>
			</table>
			<div class="xcel_image6 page3_2line">2</div>
			<div class="xcel_image6 page3_scopeline1">PROJECT SCOPE</div>
			<div class="xcel_image5">The proposed project scope includes:
			</div>
			<div class="xcel_image5" style="height: 145px; margin: 0 12%;">
					<?php if($test[0]->scopeBullet1 != null ): ?>
						<li> <?php echo e($test[0]->scopeBullet1); ?></li>
						<li> <?php echo e($test[0]->scopeBullet2); ?></li> 
						<li> <?php echo e($test[0]->scopeBullet3); ?></li> 
						<li> <?php echo e($test[0]->scopeBullet4); ?></li>
					<?php endif; ?>
			</div>
			<div class="xcel_image6 page3_3line">3</div>
			<div class="xcel_image6 page3_designinputs">DESIGN INPUTS</div>
		
			<div class='page3_valvetable'>
					<table class='table3'>
					<tr class='xcel_image4'>
						<th colspan='6'>Valve/Actuator</th>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Tag</td>
							<?php if(count($valves)==1): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->SiteName); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==2): ?> 
								<td style="min-width: 75px;"><?php echo e($valves[0]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->SiteName); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==3): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->SiteName); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==4): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->SiteName); ?></td>
								<td style="min-width: 75px;"></td>
							<?php else: ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[4]->SiteName); ?></td>
							<?php endif; ?>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Class</td>
							<?php if(count($valves)==1): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->SiteName); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==2): ?> 
								<td style="min-width: 75px;"><?php echo e($valves[0]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->SiteName); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==3): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->SiteName); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==4): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->SiteName); ?></td>
								<td style="min-width: 75px;"></td>
							<?php else: ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->SiteName); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[4]->SiteName); ?></td>
							<?php endif; ?>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Size</td>
							<?php if(count($valves)==1): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Size); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==2): ?> 
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Size); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Size); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==3): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Size); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Size); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_Size); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==4): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Size); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Size); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_Size); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_Size); ?></td>
								<td style="min-width: 75px;"></td>
							<?php else: ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Size); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Size); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_Size); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_Size); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[4]->Valve_1_Size); ?></td>
							<?php endif; ?>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Manufacturer</td>
							<?php if(count($valves)==1): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==2): ?> 
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==3): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==4): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"></td>
							<?php else: ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[4]->Valve_1_Man); ?></td>
							<?php endif; ?>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Model</td>
							<?php if(count($valves)==1): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==2): ?> 
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==3): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==4): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"></td>
							<?php else: ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_Man); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[4]->Valve_1_Man); ?></td>
							<?php endif; ?>
						</tr>
						<tr class='xcel_image5'>
							<td>Valve Serial Number</td>
							<?php if(count($valves)==1): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Serial); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==2): ?> 
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Serial); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Serial); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==3): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Serial); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Serial); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_Serial); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==4): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Serial); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Serial); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_Serial); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_Serial); ?></td>
								<td style="min-width: 75px;"></td>
							<?php else: ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Serial); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Serial); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_Serial); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_Serial); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[4]->Valve_1_Serial); ?></td>
							<?php endif; ?>
						</tr>
						<tr class='xcel_image5'>
							<td>Max Differential Pressure</td>
							<?php if(count($valves)==1): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_MDP); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==2): ?> 
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_MDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_MDP); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==3): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_MDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_MDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_MDP); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==4): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_MDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_MDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_MDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_MDP); ?></td>
								<td style="min-width: 75px;"></td>
							<?php else: ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_MDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_MDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_MDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_MDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[4]->Valve_1_MDP); ?></td>
							<?php endif; ?>
						</tr>
						<tr class='xcel_image5'>
							<td>Temperature Rating</td>
							<?php if(count($valves)==1): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_TR); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==2): ?> 
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_TR); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_TR); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==3): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_TR); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_TR); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_TR); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==4): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_TR); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_TR); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_TR); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_TR); ?></td>
								<td style="min-width: 75px;"></td>
							<?php else: ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_TR); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_TR); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_TR); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_TR); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[4]->Valve_1_TR); ?></td>
							<?php endif; ?>
						</tr>
						<tr class='xcel_image5'>
							<td>Max Wind Speed</td>
							<?php if(count($valves)==1): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_MWS); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==2): ?> 
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_MWS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_MWS); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==3): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_MWS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_MWS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_MWS); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==4): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_MWS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_MWS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_MWS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_MWS); ?></td>
								<td style="min-width: 75px;"></td>
							<?php else: ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_MWS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_MWS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_MWS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_MWS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[4]->Valve_1_MWS); ?></td>
							<?php endif; ?>
						</tr>
						<tr class='xcel_image5'>
							<td>Bettis Actuator Model</td>
							<?php if(count($valves)==1): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_BAM); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==2): ?> 
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_BAM); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_BAM); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==3): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_BAM); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_BAM); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_BAM); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==4): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_BAM); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_BAM); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_BAM); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_BAM); ?></td>
								<td style="min-width: 75px;"></td>
							<?php else: ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_BAM); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_BAM); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_BAM); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_BAM); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[4]->Valve_1_BAM); ?></td>
							<?php endif; ?>
						</tr>
						<tr class='xcel_image4'>
							<th colspan='6'>Pipe/Facility</th>
						</tr>
						<tr class='xcel_image5'>
							<td>Pipeline MAOP</td>
							<?php if(count($valves)==1): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_PLMAOP); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==2): ?> 
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_PLMAOP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_PLMAOP); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==3): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_PLMAOP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_PLMAOP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_PLMAOP); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==4): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_PLMAOP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_PLMAOP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_PLMAOP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_PLMAOP); ?></td>
								<td style="min-width: 75px;"></td>
							<?php else: ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_PLMAOP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_PLMAOP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_PLMAOP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_PLMAOP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[4]->Valve_1_PLMAOP); ?></td>
							<?php endif; ?>
						</tr>
						<tr class='xcel_image5'>
							<td>Design Pressure</td>
							<?php if(count($valves)==1): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_PLDP); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==2): ?> 
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_PLDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_PLDP); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==3): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_PLDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_PLDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_PLDP); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==4): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_PLDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_PLDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_PLDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_PLDP); ?></td>
								<td style="min-width: 75px;"></td>
							<?php else: ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1PLDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_PLDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_PLDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_PLDP); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[4]->Valve_1_PLDP); ?></td>
							<?php endif; ?>
						</tr>
						<tr class='xcel_image5'>
							<td>Design Factor</td>
							<?php if(count($valves)==1): ?>
								<td style="min-width: 75px;">1.5</td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==2): ?> 
								<td style="min-width: 75px;">1.5</td>
								<td style="min-width: 75px;">1.5</td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==3): ?>
								<td style="min-width: 75px;">1.5</td>
								<td style="min-width: 75px;">1.5</td>
								<td style="min-width: 75px;">1.5</td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==4): ?>
								<td style="min-width: 75px;">1.5</td>
								<td style="min-width: 75px;">1.5</td>
								<td style="min-width: 75px;">1.5</td>
								<td style="min-width: 75px;">1.5</td>
								<td style="min-width: 75px;"></td>
							<?php else: ?>
								<td style="min-width: 75px;">1.5</td>
								<td style="min-width: 75px;">1.5</td>
								<td style="min-width: 75px;">1.5</td>
								<td style="min-width: 75px;">1.5</td>
								<td style="min-width: 75px;">1.5</td>
							<?php endif; ?>
						</tr>
						<tr class='xcel_image5'>
							<td>Pipe Grade</td>
							<?php if(count($valves)==1): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Pipe_Grade); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==2): ?> 
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Pipe_Grade); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Pipe_Grade); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==3): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Pipe_Grade); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Pipe_Grade); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_Pipe_Grade); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==4): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Pipe_Grade); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Pipe_Grade); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_Pipe_Grade); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_Pipe_Grade); ?></td>
								<td style="min-width: 75px;"></td>
							<?php else: ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_Pipe_Grade); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_Pipe_Grade); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_Pipe_Grade); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_Pipe_Grade); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[4]->Valve_1_Pipe_Grade); ?></td>
							<?php endif; ?>
						</tr>
						<tr class='xcel_image5'>
							<td>Tubing Size</td>
							<?php if(count($valves)==1): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_TS); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==2): ?> 
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_TS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_TS); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==3): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_TS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_TS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_TS); ?></td>
								<td style="min-width: 75px;"></td>
								<td style="min-width: 75px;"></td>
							<?php elseif(count($valves)==4): ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_TS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_TS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_TS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_TS); ?></td>
								<td style="min-width: 75px;"></td>
							<?php else: ?>
								<td style="min-width: 75px;"><?php echo e($valves[0]->Valve_1_TS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[1]->Valve_1_TS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[2]->Valve_1_TS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[3]->Valve_1_TS); ?></td>
								<td style="min-width: 75px;"><?php echo e($valves[4]->Valve_1_TS); ?></td>
							<?php endif; ?>
						</tr>
					</table>
				</div>";

			</div>
			<hr class="top_break">
			<div class="xcel_image5 bottom_section">
				<div>Document No. <?php echo e($test[0]->ProjectNum); ?> - Design Basis <?php if($test[0]->Issuance == "IFR"): ?> A <?php elseif($test[0]->Issuance == "IFB"): ?> B <?php else: ?> 0 <?php endif; ?></div>
				<div>Project: <span><?php echo e($test[0]->SiteName); ?></span> - Valve Automation</div>
				<div class="page-break">ENE Project #: <?php echo e($test[0]->ProjectNum); ?></div>
			</div>
	</div>
	<div class="page_4">
		<div class="top_section">
			<div id="xcel_image"><img src="<?php echo e(asset('images/EN-image.svg')); ?>"></div>
			<div class="xcel_image3 DB">Design Basis - Automation</div>
			<hr class="top_break">
			<div class="xcel_image6 page4_4line">4</div>
			<div class="xcel_image6 page4_4Programming">PROGRAMMING</div>
			<div class="xcel_image5 page4_Prog_Desc1">The program for <?php echo e($test[0]->SiteName); ?> VS will be modified to include <?php echo count($valves) ?> newly automated valves.  A copy of the standard RCV program will be used and updated with site-specific values.</div>
			<div class="xcel_image5 page4_Prog_Desc2">Programming will begin upon completion of the IFC drawing package.</div>
			<div class="xcel_image5 page4_Prog_Desc3">SCADA 210 LISTUS</div>
			<div class="xcel_image5 page4_Prog_Desc4">(210 list to be updated here and sent to Xcel for review once programming has begun)</div>
			<div class="xcel_image6 page4_5line">5</div>
			<div class="xcel_image6 page4_5Attachments">ATTACHMENTS</div>
			<div class="xcel_image6 page4_Pictureline">5.1 Diagrams, Sketches and other Documents</div>
			<div class="xcel_image5 page4_511line">5.1.1 Diagrams of Proposed Work</div>
			<div class="page5_IsoDwg">
				<?php echo "Picture 1"; ?>
			</div>
		</div>
		<hr class="top_break">
		<div class="xcel_image5 bottom_section">
				<div>Document No. <?php echo e($test[0]->ProjectNum); ?> - Design Basis <?php if($test[0]->Issuance == "IFR"): ?> A <?php elseif($test[0]->Issuance == "IFB"): ?> B <?php else: ?> 0 <?php endif; ?></div>
				<div>Project: <span><?php echo e($test[0]->SiteName); ?></span> - Valve Automation</div>
				<div class="page-break">ENE Project #: <?php echo e($test[0]->ProjectNum); ?></div>
			</div>	</div>
	<div class="page_5">
		<div class="top_section">
			<div id="xcel_image"><img src="<?php echo e(asset('images/EN-image.svg')); ?>"></div>
			<div class="xcel_image3 DB">Design Basis - Automation</div>
			<hr class="top_break">
			<div class="xcel_image5 page5_IsoDwgTitle">Isometric Drawing</div>
			<div class="page5_IsoDwg">
			<?php echo "Picture 2"; ?>
			</div>
		</div>
		<hr class="top_break">
			<div class="xcel_image5 bottom_section">
				<div>Document No. <?php echo e($test[0]->ProjectNum); ?> - Design Basis <?php if($test[0]->Issuance == "IFR"): ?> A <?php elseif($test[0]->Issuance == "IFB"): ?> B <?php else: ?> 0 <?php endif; ?></div>
				<div>Project: <span><?php echo e($test[0]->SiteName); ?></span> - Valve Automation</div>
				<div class="page-break">ENE Project #: <?php echo e($test[0]->ProjectNum); ?></div>
			</div>
	<div class="page_5">
		<div class="top_section">
			<div id="xcel_image"><img src="<?php echo e(asset('images/EN-image.svg')); ?>"></div>
			<div class="xcel_image3 DB">Design Basis - Automation</div>
			<hr class="top_break">
			<div class="xcel_image5 page5_IsoDwgTitle">Isometric Drawing</div>
			<div class="page5_IsoDwg1">
			<?php echo "Picture 3"; ?>
			</div>
			<div class="page5_IsoDwg2">
			<?php echo "Picture 4"; ?>
			</div>
		</div>
		<hr class="top_break">
			<div class="xcel_image5 bottom_section">
				<div>Document No. <?php echo e($test[0]->ProjectNum); ?> - Design Basis <?php if($test[0]->Issuance == "IFR"): ?> A <?php elseif($test[0]->Issuance == "IFB"): ?> B <?php else: ?> 0 <?php endif; ?></div>
				<div>Project: <span><?php echo e($test[0]->SiteName); ?></span> - Valve Automation</div>
				<div class="page-break">ENE Project #: <?php echo e($test[0]->ProjectNum); ?></div>
			</div>	
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\Homestead\ENProject\resources\views/Design_Basis_Manual.blade.php ENDPATH**/ ?>